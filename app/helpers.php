<?php
function current_page_parameters()
{
	return \Request::route()->parameters;
}
function current_page()
{
	return \Request::route()->getName();
}

function change_lang_parameters($locale = 'en')
{
	$parameters = current_page_parameters();
	$parameters['locale'] = $locale;
	return $parameters;
}

function changeLanguageAdmin($locale)
{
	session(['locale' => $locale ]);
    app()->setLocale($locale);
}
function getStyle($locale = 'ar'){

	switch (cLang()) {
		case 'ar':
			$return = [
				'locale' => $locale,
				'dir'=>'rtl',
				'dir-full'=>'right',
				'rev'=>'ltr',
				'rev-full'=>'left',
				'short-rev'=>'l',
				'short-rev'=>'l',
				'short-dir'=>'r',
			];
			break;
		
		default:
			$return = [
				'locale' => $locale,
				'dir'=>'ltr',
				'dir-full'=>'left',
				'rev'=>'ltr',
				'rev-full'=>'right',
				'short-rev'=>'r',
				'short-dir'=>'l',
			];
			break;
	}
	return $return;
}

function cLang()
{
	return App::getLocale();
}
function lRoute($route, $variables = [])
{
	if (!isset($variables['locale'])) {
		$variables['locale'] = clang();
	}
	return route($route, $variables);
}

function active($active, $page)
{
	if ($active == $page) {
		return 'active';
	}
	return '';
}