<?php
/**
 * Collection of CakePHP3 Form Templates for use with Twitter Bootstrap 3
 *
 * User: David Yell <neon1024@gmail.com>
 * Date: 21/10/2014
 * Time: 16:40
 */
$config = [
	'button' => '<button{{attrs}} class="btn btn-default">{{text}}</button>',
	'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
	'checkboxFormGroup' => '{{input}}{{label}}',
	'checkboxWrapper' => '<div class="checkbox">{{input}}{{label}}</div>',
	'dateWidget' => '{{year}}{{month}}{{day}}{{hour}}{{minute}}{{second}}{{meridian}}',
	'error' => '<div class="error-message">{{content}}</div>',
	'errorList' => '<ul>{{content}}</ul>',
	'errorItem' => '<li>{{text}}</li>',
	'file' => '<input type="file" name="{{name}}"{{attrs}}>',
	'fieldset' => '<fieldset>{{content}}</fieldset>',
	'formstart' => '<form{{attrs}}>',
	'formend' => '</form>',
	'formGroup' => '{{label}}{{input}}',
	'hiddenblock' => '<div style="display:none;">{{content}}</div>',
	'input' => '<input class="form-control" type="{{type}}" name="{{name}}"{{attrs}}>',
	'inputsubmit' => '<input type="{{type}}"{{attrs}}>',
	'inputContainer' => '<div class="form-group {{type}}{{required}}">{{content}}</div>',
	'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
	'label' => '<label{{attrs}}>{{text}}</label>',
	'legend' => '<legend>{{text}}</legend>',
	'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
	'optgroup' => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
	'select' => '<select name="{{name}}"{{attrs}}>{{content}}</select>',
	'selectMultiple' => '<select name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
	'radio' => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}>',
	'radioWrapper' => '{{input}}{{label}}',
	'textarea' => '<textarea name="{{name}}"{{attrs}}>{{value}}</textarea>',
	'submitContainer' => '<div class="submit">{{content}}</div>',
];