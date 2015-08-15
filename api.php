<?php 
	class API{
		function shop(){
			switch ($_POST['oper']) {
				case 'select':
					# code...
					$data = $this->getClustere('');
					echo json_encode($data);
					break;
				case 'insert':
					# code...
					break;
				case 'delete':
					# code...
					break;

				
				default:
					# code...
					break;
			}
		}

		private function getClustere(){
			asdasdas das
		}
	}
?>