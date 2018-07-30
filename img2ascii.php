<?php
header("charset=utf-8");
function OpenPic($picPath,$picType)
{
    //https://stackoverflow.com/questions/2086374/what-is-the-difference-between-image-png-and-image-x-png
    if($picType=='image/jpeg')
    {
        $pic=imagecreatefromjpeg($picPath);
    }
    else if($picType=='image/png'||$picType=='image/x-png')
    {
        $pic=imagecreatefrompng($picPath);
    }
    else
    {
        die('Wrong Input Format');
    }
    if(!$pic)
    {
        die('Load Failed');
    }
    else
    {
        return $pic;
    }
}
function OutputPic($picPath,$picSource)
{
    $pathExplode=explode(".",$picPath);
    $picType=end($pathExplode);
    if($picType=='jpg'||$picType=='jpeg')
    {
        header('Content-Type: image/jpeg');
        imagejpeg($picSource,$picPath);
    }
    else if($picType=='png')
    {
        header('Content-Type: image/png');
        imagepng($picSource,$picPath);
    }
    else
    {
        die('Wrong Output Format');
    }
}
$longopt = array(
    'in:',
    'out:',
    'xstep:',
    'ystep:',
    'ch:'
);
$inputParam=getopt('',$longopt);
if(!isset($inputParam['ch']))
{
    $inputParam['ch']='*';
}
if(!isset($inputParam['xstep']))
{
    $inputParam['xstep']=4;
}
if(!isset($inputParam['ystep']))
{
    $inputParam['ystep']=2;
}
if(!isset($inputParam['out']))
{
    $inputParam['out']=__DIR__.'\pic\output.png';
}
$imgInfo = getimagesize($inputParam['in']);
$outPic=@imagecreatetruecolor($imgInfo[0],$imgInfo[1]);
$pic=OpenPic($inputParam['in'],$imgInfo['mime']);
for($x=0;$x<imagesx($pic);$x+=intval($inputParam['xstep']))
{
    for($y=0;$y<imagesy($pic);$y+=intval($inputParam['ystep']))
    {
        $rgb = imagecolorat($pic, $x, $y);
        $r   = ($rgb >> 16) & 0xFF;
        $g   = ($rgb >> 8) & 0xFF;
        $b   = $rgb & 0xFF;
        $textColor=imagecolorallocate($outPic,$r,$g,$b);
        imagestring($outPic,2,$x,$y,$inputParam['ch'],$textColor);
    }
}
OutputPic($inputParam['out'],$outPic);
echo 'Success';
imagedestroy($outPic);
?>