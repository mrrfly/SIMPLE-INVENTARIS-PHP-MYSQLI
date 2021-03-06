<?php
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');

$data1y=array(47,80,40,116);
$graph = new Graph(400, 300, 'auto');
$graph->SetScale('textlin');

$theme_class = new AquaTheme;
$graph->SetTheme($theme_class);

// after setting theme, you can change details as you want
$graph->SetFrame(true, 'lightgray');                        // set frame visible

$graph->xaxis->SetTickLabels(array('A','B','C','D')); // change xaxis lagels
$graph->title->Set("Theme Example");                    // add title

// add barplot
$bplot = new BarPlot($data1y);
$graph->Add($bplot);
$graph->SetColor('#cc1111');    // you can change color only after calling Add()

$graph->Stroke();
