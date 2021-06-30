<?php

namespace Application\Core;

class Route
{
    static function start() 
    {
        // контроллер и действие по умолчанию
        $id = null;
        $controllerName = 'adress';
        $actionName = 'list';
        
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // получаем имя контроллера
        if (isset($routes[1]) && ctype_alnum($routes[1])) {   
            $controllerName = $routes[1];
        }
        
        // получаем имя экшена
        if (isset($routes[2]) && ctype_alnum($routes[2])) {
            $actionName = $routes[2];
        }

        // получаем id
        if (isset($routes[3]) && is_numeric($routes[3])) {
            $id = $routes[3];
        }

        // добавляем префиксы
        $modelNameNamespace = '\Application\Models\Model'.ucfirst($controllerName);
        $modelName = 'Model'.ucfirst($controllerName);
        $controllerNameNamespace = '\Application\Controllers\Controller'.ucfirst($controllerName);
        $controllerName = 'Controller'.ucfirst($controllerName);

        // подцепляем файл с классом модели (файла модели может и не быть)
        $modelFile = lcfirst($modelName.'.php');
        $modelPath = "application/models/".$modelFile;
        if (file_exists($modelPath)) {
            include "application/models/".$modelFile;
        }

        // подцепляем файл с классом контроллера
        $controllerFile = lcfirst($controllerName.'.php');
        $controllerPath = "application/controllers/".$controllerFile;
        try {
        	if (file_exists($controllerPath)) {
        		include "application/controllers/".$controllerFile;
        	}
        	else {
        		throw new \Exception();
            }
        }
        catch (\Exception $e) {
            exit('Вы не туда попали!');
        }
                
        // создаем объект контроллера
        $controller = new $controllerNameNamespace;
        $action = $actionName;
        
        try {
        	if (method_exists($controller, $action)) {
        		// вызываем действие контроллера
        		$controller->$action($id);
        	}
        	else {
        		throw new \Exception();
        	}
        }
        catch (\Exception $e) {
            exit('Вы не туда попали!');
        }
    }
}
