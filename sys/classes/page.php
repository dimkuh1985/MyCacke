<?php
	class Page {
		private $id;
		private $user;
		private $title;
		private $style;
		private $script;
		private $content;
		private $template;

		public function __construct(){
			$this->define_page_id(); //оределяем id страницы
			$this->define_page_user(); //определяем пользователя страницы

			$this->title = 'MyCake';
			$this->style = 'res/css/'.$this->id.'.css';
			$this->script = 'res/js'.$this->id.'.js';
			$this->content = 'app/pages/'.$this->id.'.php'; //about.php contacts.php entry.php...
			$this->template = 'res/tpl/base.php'; //базовый шаблон (в т.ч. jumbotron и nav) стоит на месте 
		}

		public function define_page_id(){
			$this->id = 'main';
			if (isset($_GET['id'])){
				$this->id = $_GET['id'];
			}
		}

		
		public function define_page_user(){
			$this->user = 'Гость';
			if (isset($_SESSION['user'])){
				$this->user = $_SESSION['user'];
			}

		}

		public function load(){
			include_once($this->template);
		}

	}