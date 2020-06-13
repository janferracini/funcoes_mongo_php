<?php

$route[]=['/','dashController'];

$route[]=['usuarios','usuarios/tableview'];
$route[]=['usuarios_add','usuarios/add'];
$route[]=['usuarios_save','usuarios/save'];
$route[]=['usuarios_edit','usuarios/edit'];
$route[]=['usuarios_update','usuarios/update'];
$route[]=['usuarios_delete','usuarios/delete'];

$route[]=['marcas','marcas/tableview'];
$route[]=['marcas_add','marcas/add'];
$route[]=['marcas_save','marcas/save'];
$route[]=['marcas_edit','marcas/edit'];
$route[]=['marcas_update','marcas/update'];
$route[]=['marcas_delete','marcas/delete'];

$route[]=['produtos','produtos/tableview'];
$route[]=['produtos_add','produtos/add'];
$route[]=['produtos_save', 'produtos/save']; //salva no update
$route[]=['produtos_edit','produtos/edit']; //busca no edit
$route[]=['produtos_update','produtos/update'];
$route[]=['produtos_delete','produtos/delete'];

$route[]=['lojas','lojas/tableview'];
$route[]=['lojas_add','lojas/add'];
$route[]=['lojas_save','lojas/save'];
$route[]=['lojas_edit','lojas/edit'];
$route[]=['lojas_update','lojas/update'];
$route[]=['lojas_delete','lojas/delete'];

//return $route;