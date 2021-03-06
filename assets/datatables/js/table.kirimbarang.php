<?php

/*
 * Editor server script for DB table kirimbarang
 * Automatically generated by http://editor.datatables.net/generator
 */

// DataTables PHP library
include( "C:/xampp/htdocs/telkompengiriman/assets/datatables/php/lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Validate;


// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'kirimbarang' )
	->fields(
		Field::inst( 'nokirimbarang' )
			->validator( 'Validate::maxLen_required', 11 ),
		Field::inst( 'namabarang' )
			->validator( 'Validate::maxLen_required', 100 ),
		Field::inst( 'noijinperusahaan' )
			->validator( 'Validate::required' ),
		Field::inst( 'noijinjasa' )
			->validator( 'Validate::required' ),
		Field::inst( 'idprovkirim' )
			->validator( 'Validate::required' ),
		Field::inst( 'idprovdari' )
			->validator( 'Validate::required' ),
		Field::inst( 'pegawaijasapengirim' )
			->validator( 'Validate::maxLen_required', 255 ),
		Field::inst( 'pegawaitelkompenerima' )
			->validator( 'Validate::maxLen_required', 255 ),
		Field::inst( 'date' )
			->validator( 'Validate::dateFormat_required', 'Y-m-d' )
			->getFormatter( 'Format::date_sql_to_format', 'Y-m-d' )
			->setFormatter( 'Format::date_format_to_sql', 'Y-m-d' ),
		Field::inst( 'alamatkirim' )
			->validator( 'Validate::required' ),
		Field::inst( 'statuskirim' ),
		Field::inst( 'statusterima' )
	)
	->process( $_POST )
	->json();

