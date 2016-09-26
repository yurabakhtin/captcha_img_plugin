<?php
/*
 * Global lang file
 * This file was generated automatically from messages.po
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );


$trans['ru_RU'] = array(
	'' => "Project-Id-Version: captcha_img_plugin 2.0\nReport-Msgid-Bugs-To: http://daniel.hahler.de/\nPOT-Creation-Date: 2007-09-10 22:20+0200\nPO-Revision-Date: 2008-02-11 02:51-0500\nLast-Translator: Alex <alex@boxter.org>\nLanguage-Team: Russian b2evolution <alex@boxter.org>\nMIME-Version: 1.0\nContent-Type: text/plain; charset=utf-8\nContent-Transfer-Encoding: 8bit\nX-Poedit-Language: Russian\nX-Poedit-Country: RUSSIAN FEDERATION\nX-Poedit-SourceCharset: utf-8\n",
	'Captcha images' => "Captcha изображения",
	'Use generated images to tell humans and robots apart.' => "Использует генерируемые изображения для отличия людей от роботов.",
	'Protect trackback URLs' => "Защитить URL трекбеков.",
	'Fonts folder' => "Папка шрифтов",
	'Path to a folder with TrueType fonts for captcha text, relative to the plugin file.' => "Путь к папке с TrueType шрифтами для текта captcha, относительный к файлу плагина.",
	'Timeout for keys' => "Время задержки для ввода",
	'in minutes. When does the generated captcha expire?' => "в минутах. Когда сгенерированный captcha устареет?",
	'Websafe colors' => "Безопасные веб-цвета",
	'Use web safe colors (only 216 colors)?' => "Использовать безопасные веб-цвета (всего 216)?",
	'Noise' => "Шум",
	'Use background noise characters instead of a grid.' => "Использовать фоновый шум для символов вместо зачеркивания.",
	'Noise factor' => "Фактор шума",
	'Noise multiplier (number of characters gets multipled by this to define noise).' => "Множитель шума (уровень шума для символов).",
	'Min chars' => "Минимум символов",
	'The minimum number of characters to use.' => "Минимальное число символов для использования.",
	'Max chars' => "Максимум символов",
	'The maximum number of characters to use.' => "Максимальное число символов для использования.",
	'Min font size' => "Минимальный шрифт",
	'The minimum font size to use.' => "Минимальный размер шрифта для использования.",
	'Max font size' => "Максимальный шрифт",
	'The maximum font size to use.' => "Максимальный размер шрифта для использования.",
	'Max rotation' => "Максимальный поворот",
	'The maximum degrees a char should be rotated. 25 means a random rotation between -25 and 25.' => "Максимальный угол поворота символов. 25 - означает случайный угол поворота от -25 до 25.",
	'JPEG quality' => "Качество JPEG",
	'JPEG image quality.' => "Качество JPEG изображения.",
	'Valid characters' => "Допустимые символы",
	'Valid characters to use in generated images.' => "Допустимые символы для использования в изображениях.",
	'Case sensitive' => "Чувствительные к регистру",
	'Use case sensitive keys?' => "Использовать чувствительные к регистру символы?",
	'Use for' => "Применить для",
	'Use for anonymous' => "Применить для анонимов",
	'Should this plugin be used for anonymous users?' => "Должен ли плагин применяться к анонимным пользователям?",
	'Use for members' => "Использовать для членов",
	'Use this plugin for members of the target blog, if their level is below this.' => "Применять плагин для членов данного блога, если их уровень ниже назначенного.",
	'Use for registered' => "Применять плагин для членов",
	'Use this plugin for registered users, if their level is below this.' => "Применять плагин для зарегистрированных пользователей блога, если их уровень ниже назначенного.",
	'Post-process' => "Пост-обработка",
	'A command to post-process the image.' => "Команда для пост-обработки изображения.",
	'You do not seem to come from the intended page!' => "Похоже что вы пришли с не предназначенной страницы!",
	'No stored private key has been found. You probably do not have cookies enabled or the timeout of %d minutes has expired.' => "Не найдены сохраненные ключи. Возможно у вас отключены cookies или прошло необходимое время ( %d минут ) для ввода значения.",
	'The entered code does not match the expected one.' => "Введен не правильный код.",
	'This is a captcha-picture. It is used to prevent mass-access by robots.' => "Это captcha изображение. Используется для блокировки роботов.",
	'Reload' => "Обновить",
	'Reload image!' => "Обновить изображение!",
	'Please enter the characters from the image above.' => "Пожалуйста, введите символы, указанные на изображении.",
	'case insensitive' => "не чувствительные к регистру",
	'case sensitive' => "чувствительные к регистру",
	'Captcha' => "Captcha",
	'Validate me' => "Проверь меня",
	'The captcha code was invalid: %s' => "Ошибка: %s",
	'Display trackback URL' => "Показать трекбек URL",
	'Invalid trackback URL!' => "Не верный трекбек URL!",
	'Invalid key in trackback URL!' => "Недопустимое значение в трекбек URL!",
	'Create test image... (please save any changes before)' => "Создать тестовое изображение... (перед этим сохраните изменения)",
	'A generated image should show up below. The image only gets displayed once - use the test link again for a new try.' => "Сгенерированное изображение должно появиться снизу. Картинка появляется только один раз, нажмите на ссылку еще раз для повтора.",
	'The GD library does not seem to be installed.' => "GD библиотека не установлена.",
	'No JPEG support. (Function imagejpeg does not exist)' => "Нет поддержки JPEG. (Функция imagejpeg не существует)",
	'FreeType library not available. (Function imagettftext does not exist)' => "FreeType библиотека не найдена. (Функция imagettftext не существует)",
	'Fonts folder %s is not readable or does not exist!' => "Папка шрифтов %s не доступна или не существует.",
	'No Truetype fonts available!' => "Не доступны TrueType шрифты!",
);
?>