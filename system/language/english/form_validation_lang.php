<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2018, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/*$lang['form_validation_required']		= 'The {field} field is required.';
$lang['form_validation_isset']			= 'The {field} field must have a value.';
$lang['form_validation_valid_email']		= 'The {field} field must contain a valid email address.';
$lang['form_validation_valid_emails']		= 'The {field} field must contain all valid email addresses.';
$lang['form_validation_valid_url']		= 'The {field} field must contain a valid URL.';
$lang['form_validation_valid_ip']		= 'The {field} field must contain a valid IP.';
$lang['form_validation_min_length']		= 'The {field} field must be at least {param} characters in length.';
$lang['form_validation_max_length']		= 'The {field} field cannot exceed {param} characters in length.';
$lang['form_validation_exact_length']		= 'The {field} field must be exactly {param} characters in length.';
$lang['form_validation_alpha']			= 'The {field} field may only contain alphabetical characters.';
$lang['form_validation_alpha_numeric']		= 'The {field} field may only contain alpha-numeric characters.';
$lang['form_validation_alpha_numeric_spaces']	= 'The {field} field may only contain alpha-numeric characters and spaces.';
$lang['form_validation_alpha_dash']		= 'The {field} field may only contain alpha-numeric characters, underscores, and dashes.';
$lang['form_validation_numeric']		= 'The {field} field must contain only numbers.';
$lang['form_validation_is_numeric']		= 'The {field} field must contain only numeric characters.';
$lang['form_validation_integer']		= 'The {field} field must contain an integer.';
$lang['form_validation_regex_match']		= 'The {field} field is not in the correct format.';
$lang['form_validation_matches']		= 'The {field} field does not match the {param} field.';
$lang['form_validation_differs']		= 'The {field} field must differ from the {param} field.';
$lang['form_validation_is_unique'] 		= 'The {field} field must contain a unique value.';
$lang['form_validation_is_natural']		= 'The {field} field must only contain digits.';
$lang['form_validation_is_natural_no_zero']	= 'The {field} field must only contain digits and must be greater than zero.';
$lang['form_validation_decimal']		= 'The {field} field must contain a decimal number.';
$lang['form_validation_less_than']		= 'The {field} field must contain a number less than {param}.';
$lang['form_validation_less_than_equal_to']	= 'The {field} field must contain a number less than or equal to {param}.';
$lang['form_validation_greater_than']		= 'The {field} field must contain a number greater than {param}.';
$lang['form_validation_greater_than_equal_to']	= 'The {field} field must contain a number greater than or equal to {param}.';
$lang['form_validation_error_message_not_set']	= 'Unable to access an error message corresponding to your field name {field}.';
$lang['form_validation_in_list']		= 'The {field} field must be one of: {param}.';

$lang['required'] 			= "Bagian {field} wajib diisi";
$lang['isset']				= "Bagian {field} harus mempunyai nilai.";
$lang['valid_email']		= "Bagian {field} harus berisi email yang sah.";
$lang['valid_emails'] 		= "Bagian {field} harus berisi seluruh email yang sah.";
$lang['valid_url'] 			= "Bagian {field} harus berisi URL yang sah.";
$lang['valid_ip'] 			= "Bagian {field} harus berisi IP yang sah.";
$lang['min_length']			= "Panjang {field} setidaknya paling sedikit {param} karakter.";
$lang['max_length']			= "Panjang {field} tidak boleh melebihi {param} karakter.";
$lang['exact_length']		= "Panjang {field} harus tepat {param} karakter.";
$lang['alpha']				= "Bagian {field} hanya boleh berisi abjad.";
$lang['alpha_numeric']		= "Bagian {field} hanya boleh berisi angka-abjad.";
$lang['alpha_dash']			= "Bagian {field} hanya boleh berisi angka-abjad, garis bawah _ , dan alangan -.";
$lang['numeric']			= "Bagian {field} harus berisi angka.";
$lang['is_numeric']			= "Bagian {field} harus berisi angka.";
$lang['integer']			= "Bagian {field} harus berisi bilangan bulat.";
$lang['regex_match']		= "Bagian {field} tidak sesuai format";
$lang['matches']			= "Bagian {field} tidak sama dengan bagian {param}.";
$lang['is_unique'] 			= "Bagian {field} harus unik.";
$lang['is_natural']			= "Bagian {field} harus berisi angka positif.";
$lang['is_natural_no_zero']	= "Bagian {field} harus berisi angka lebih besar dari 0.";
$lang['decimal']			= "Bagian {field} harus berisi angka desimal.";
$lang['less_than']			= "Bagian {field} harus kurang dari {param}.";
$lang['greater_than']		= "Bagian {field} harus lebih dari {param}.";*/

$lang['form_validation_required']				= "Bagian {field} wajib diisi";
$lang['form_validation_isset']					= "Bagian {field} harus mempunyai nilai.";
$lang['form_validation_valid_email']			= "Bagian {field} harus berisi email yang sah.";
$lang['form_validation_valid_emails']			= "Bagian {field} harus berisi seluruh email yang sah.";
$lang['form_validation_valid_url']				= "Bagian {field} harus berisi URL yang sah.";
$lang['form_validation_valid_ip']				= "Bagian {field} harus berisi IP yang sah.";
$lang['form_validation_min_length']				= "Panjang {field} setidaknya paling sedikit {param} karakter.";
$lang['form_validation_max_length']				= "Panjang {field} tidak boleh melebihi {param} karakter.";
$lang['form_validation_exact_length']			= "Panjang {field} harus tepat {param} karakter.";
$lang['form_validation_alpha']					= "Bagian {field} hanya boleh berisi abjad.";
$lang['form_validation_alpha_numeric']			= "Bagian {field} hanya boleh berisi angka-abjad.";
$lang['form_validation_alpha_numeric_spaces']	= 'The {field} field may only contain alpha-numeric characters and spaces.';
$lang['form_validation_alpha_dash']				= "Bagian {field} hanya boleh berisi angka-abjad, garis bawah _ , dan alangan -.";
$lang['form_validation_numeric']				= "Bagian {field} harus berisi angka.";;
$lang['form_validation_is_numeric']				= "Bagian {field} harus berisi angka.";
$lang['form_validation_integer']				= "Bagian {field} harus berisi bilangan bulat.";
$lang['form_validation_regex_match']			= "Bagian {field} tidak sesuai format";
$lang['form_validation_matches']				= "Bagian {field} tidak sama dengan bagian {param}.";
$lang['form_validation_differs']				= "Bagian {field} harus berbeda dengan bagian {param}.";
$lang['form_validation_is_unique'] 				= "Bagian {field} harus unik.";
$lang['form_validation_is_natural']				= "Bagian {field} harus berisi angka positif.";
$lang['form_validation_is_natural_no_zero']		= "Bagian {field} harus berisi angka lebih besar dari 0.";
$lang['form_validation_decimal']				= "Bagian {field} harus berisi angka desimal.";
$lang['form_validation_less_than']				= "Bagian {field} harus kurang dari {param}.";
$lang['form_validation_less_than_equal_to']		= 'The {field} field must contain a number less than or equal to {param}.';
$lang['form_validation_greater_than']			= "Bagian {field} harus lebih dari {param}.";
$lang['form_validation_greater_than_equal_to']	= 'The {field} field must contain a number greater than or equal to {param}.';
$lang['form_validation_error_message_not_set']	= 'Unable to access an error message corresponding to your field name {field}.';
$lang['form_validation_in_list']				= 'The {field} field must be one of: {param}.';