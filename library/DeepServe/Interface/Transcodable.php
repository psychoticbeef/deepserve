<?php

interface DeepServe_Interface_Music_File {

  //public function transcode();
	public function get_uid();
	public function get_location();
	public function get_album();
	public function get_artist();
	public function get_name();
	public function serialize();
	public function create_from_string($serialized);
	public function get_type();

}

