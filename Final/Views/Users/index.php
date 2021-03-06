<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model = Users::Get($_REQUEST['id']);
                $view         = 'details.php';                
                break;
                
        case 'new':
                $model = Users::Blank();
                $view         = 'edit.php';                
                break;
        
        case 'save':
                $errors = Users::Validate($_REQUEST);
                if(!$errors){
                        $errors = Users::Save($_REQUEST);                        
                }
                if(!$errors){
                        header("Location: ?");
                        die();
                }                        
                        $model = $_REQUEST;
                        $view = 'edit.php';
                break;
                
        case 'edit':
                $model = Users::Get($_REQUEST['id']);
                $view         = 'edit.php';                
                break;
                
        case 'delete':
                $model = Users::Get($_REQUEST['id']);
                $view         = 'details.php';                
                break;
        
        default:
                $model = Users::Get();
                $view         = 'list.php';                
                break;
}

switch ($format) {
        case 'min':
                include $view;
                break;
        case 'dialog':
                include '../Shared/_Dialog.php';
                break;
        
        default:
                include '../Shared/_Layout.php';
                
                break;
}