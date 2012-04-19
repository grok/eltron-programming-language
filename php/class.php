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

    protected function _get_print( $count = 1 ) {
      return 'P' . $count . $this->_get_end_of_line();
    }

    protected function _get_ascii() {
      return 'A';
    }

    protected function _get_barcode() {
      return 'B';
    }

    public function set_x_axis( $dots ) {
      return $dots;
    }

    public function set_y_axis( $dots ) {
      return $dots;
    }

    public function set_rotation( $value ) {
      return $value;
    }

    public function set_font( $value = 0 ) {
      return $value;
    }

    public function set_x_expansion( $multiplier ) {
      return $multiplier;
    }

    public function set_y_expansion( $multiplier ) {
      return $multiplier;
    }

    public function set_reverse( $boolean ) {
      return $boolean ? 'R' : 'N';
    }

    public function set_data( $value ) {
      return '"' . $value . '"';
    }

    public function set_type( $type ) {
      return $type;
    }

    public function set_narrow_bar_width( $dots ) {
      return $dots;
    }

    public function set_wide_bar_width( $dots ) {
      return $dots;
    }

    public function set_height( $dots ) {
      return $dots;
    }

    public function set_show_text( $boolean ) {
      return $boolean ? 'B' : 'N';
    }

    # Problem: Too many damn parameters.
    # Emotion: http://i.imgur.com/KGAk4.gif
    # Solution: Not apparent yet.
    public function add_ascii_text( $x_axis, $y_axis, $rotation, $font, $expand_x, $expand_y, $reverse, $data ) {
      $parameters = compact( 'x_axis', 'y_axis', 'rotation', 'font', 'expand_x', 'expand_y', 'reverse', 'data' );
      return $this->_get_ascii() . implode( ',', $parameters ) . $this->_get_end_of_line();
    }

    public function add_barcode( $x_axis, $y_axis, $rotation, $type, $narrow_bar_width, $wide_bar_width, $height, $show_text, $data ) {
      $parameters = compact( 'x_axis', 'y_axis', 'rotation', 'type', 'narrow_bar_width', 'wide_bar_width', 'height', 'show_text', 'data' );
      return $this->_get_barcode() . implode( ',', $parameters ) . $this->_get_end_of_line();
    }

    public function create_label() {
      return $this->_get_new_label();
    }

    public function print_label( $count = 1 ) {
      return $this->_get_print( $count );
    }

  }

?>
