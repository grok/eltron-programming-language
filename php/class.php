<?php

	class EltronProgrammingLanguage {

		private $_new_line = "\n";
		private $_carriage_return = "\r";
		private $_end_of_line = null;

		public function initialize() {
			$this->_set_end_of_line(
				$this->_new_line . $this->_carriage_return
			);
		}

		protected function _set_end_of_line( $end_of_line ) {
			$this->_end_of_line = $end_of_line;
		}

		protected function _get_end_of_line() {
			return $this->_end_of_line;
		}

		protected function _get_new_label() {
			return $this->_get_end_of_line() . 'N' . $this->_get_end_of_line();
		}

		public function create_label() {
			return $this->_get_new_label();
		}

		protected function _get_print( $count = 1 ) {
			return 'P' . $count . $this->_get_end_of_line();
		}

		public function print_label( $count = 1 ) {
			return $this->_get_print( $count );
		}

		# Problem: Too many damn parameters.
		# Emotion: http://i.imgur.com/KGAk4.gif
		# Solution: Not apparent yet.
		public function add_ascii_text( $x_axis, $y_axis, $rotation, $font, $expand_x, $expand_y, $reverse, $data ) {
			return "A$x_axis,$y_axis,$rotation,$font,$expand_x,$expand_y,$reverse,\"$data\"" . $this->_get_end_of_line();
		}

	}

?>
