<?php

$route[]=['/','dashController'];

$route[]=['usuarios','usuarios/tableview'];
$route[]=['usuarios_add','usuarios/add'];
$route[]=['usuarios_save','usuarios/save'];
$route[]=['usuarios_edit','usuarios/edit'];
$route[]=['usuarios_update','usuarios/update'];

$route[]=['marcas','marcas/tableview'];
$route[]=['marcas_add','marcas/add'];
$route[]=['marcas_save','marcas/save'];
$route[]=['marcas_edit','marcas/edit'];
$route[]=['marcas_update','marcas/update'];

$route[]=['produtos','produtos/tableview'];
$route[]=['produtos_add','produtos/add'];
$route[]=['produtos_save', 'produtos/save'];
$route[]=['produtos_edit','produtos/edit'];
$route[]=['produtos_update','produtos/update'];

$route[]=['lojas','lojas/tableview'];
$route[]=['lojas_add','lojas/add'];
$route[]=['lojas_save','lojas/save'];
$route[]=['lojas_edit','lojas/edit'];
$route[]=['lojas_update','lojas/update'];

//return $route;