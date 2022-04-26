/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	// config.filebrowserUploadUrl = '/uploader/template/asset';
	config.filebrowserUploadUrl = 'https://s3.formasi.aws.com/asset/email';


	config.format_tags = 'p;h1;h2;h3;pre';
};
