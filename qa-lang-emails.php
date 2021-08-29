<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

return array(
	'a_commented_body' => "До Вашої відповіді на сайті ^site_title додано новий коментар від ^c_handle:\n\n^open^c_content^close\n\nВаша відповідь була:\n\n^open^c_context^close\n\nВи можете відповісти, додавши свій коментар:\n\n^url\n\nДякую, \n\n^site_title",
	'a_commented_subject' => 'На сайті ^site_title до Вашої відповіді додано коментар',
	
	'a_followed_body' => "До Вашої відповіді на сайті ^site_title було додано пов\'язане питання від ^q_handle:\n\n^open^q_title^close\n\nВаша відповідь була:\n\n^open^a_content^close\n\nНатисніть нижче, щоб відповісти на це питання:\n\n^url\n\nДякую, \n\n^site_title",
	'a_followed_subject' => 'До Вашого питання на сайті  ^site_title було додано пов\'язане питання',
	
	'a_selected_body' => "Вітаємо Вас! Ваша відповідь на сайті ^site_title була обрана найкращою. Користувач: ^s_handle:\n\n^open^a_content^close\n\nПитання:\n\n^open^q_title^close\n\nНатисніть нижче, щоб подивитися відповідь:\n\n^url\n\nДякую, \n\n^site_title",
	'a_selected_subject' => 'На сайті ^site_title була обрана найкраща відповідь!',
	
	'c_commented_body' => "Новий коментар від ^c_handle був доданий після Вашого коментаря на сайті ^site_title:\n\n^open^c_content^close\n\nПродовження обговорення:\n\n^open^c_context^close\n\nВи можете додати інший коментар:\n\n^url\n\nДякую, \n\n^site_title",
	'c_commented_subject' => 'На сайті ^site_title було додано коментар',
	
	'confirm_body' => "Перейдіть по посиланню нижче, щоб підтверждити свою адресу електронної пошти на сайті ^site_title.\n\n^url\n\nКод підтвердження: ^code\n\n Дякую, \n^site_title",
	'confirm_subject' => '^site_title - Підтвердження електронної пошти',
	
	'feedback_body' => "Коментар:\n^message\n\nІм\'я:\n^name\n\nЕлектронна пошта:\n^email\n\nЗі сторінки:\n^previous\n\nКористувач:\n^url\n\nIP:\n^ip\n\nБраузер:\n^browser",
	'feedback_subject' => '^ - Відгук',
	
	'flagged_body' => "Повідомлення ^p_handle відмічено ^flags:\n\n^open^p_context^close\n\nНатисніть нижче для перегляду повідомлення:\n\n^url\n\n\nНатисніть нижче для перегляду всіх відмічених повідомлень:\n\n^a_url\n\n\nДякую, \n\n^site_title",
	'flagged_subject' => '^site_title - Відмічене повідомлення',
	
	'moderate_body' => "Повідомлення ^p_handle потребує Вашого схвалення\n\n^open^p_context^close\n\nНатисніть нижче, щоб підтвердити або відхилити повідомлення:\n\n^url\n\n\nНатисніть нижче для перегляду повідомлень очікуючих схвалення:\n\n^a_url\n\n\nСДякую, \n\n^site_title",
	'moderate_subject' => '^site_title - Модерація',
	
	'new_password_body' => "Ваш новий пароль для сайту ^site_title.\n\nПароль: ^password\n\nРекомендуємо Вам його змінити одразу після входу на сайт.\n\nДякую, \n^site_title\n^url",
	'new_password_subject' => '^site_title - Ваш новий пароль',
	
	'private_message_body' => "Вам було відправлене особисте повідомлення ^f_handle на сайті ^site_title:\n\n^open^message^close\n\n^moreДякую, \n\n^site_title\n\n\nДля блокування особистих повідомлень зайдіть у свій профіль на сайті.\n^a_url",
	'private_message_info' => "Детальніше про ^f_handle:\n\n^url\n\n",
	'private_message_reply' => "Натисніть нижче, щоб відповісти відправити ^f_handle особисте повідомлення:\n\n^url\n\n",
	'private_message_subject' => 'Повідомлення від ^f_handle на сайті ^site_title',

	'remoderate_body' => "Відредагувати повідомлення ^p_handle потребує Вашого повторного підтвердження:\n\n^open^p_context^close\n\nНатисніть нижче, щоб підтвердити або приховати відредаговане повідомлення:\n\n^url\n\n\nНатисніть нижче, щоб передивитися всю чергу повідомлень:\n\n^a_url\n\n\nДякую,\n\n^site_title",
	'remoderate_subject' => "^site_title - Перемодерація",
	
	'q_answered_body' => "До Вашого питання на сайті ^site_title додана відповідь від ^a_handle:\n\n^open^a_content^close\n\nВаше питання:\n\n^open^q_title^close\n\nЯкщо Вам подобається ця відповідь, Ви можете обрати її в якості найкращої\n\n^url\n\nДякую, \n\n^site_title",
	'q_answered_subject' => 'На сайті ^site_title відповіли на Ваше питання',
	
	'q_commented_body' => "До Вашого питання на сайті ^site_title додано новий коментар від ^c_handle:\n\n^open^c_content^close\n\nВаше питання:\n\n^open^c_context^close\n\nВи можете відповісти, додавши свій коментар\n\n^url\n\nДякую, \n\n^site_title",
	'q_commented_subject' => 'До Вашого питання, на сайті ^site_title, додано коментар',
	
	'q_posted_body' => "Нове питання задав ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nНатисніть нижче, щоб подивитися питання\n\n^url\n\nДякую, \n\n^site_title",
	'q_posted_subject' => 'Додано нове питання на сайті ^site_title',
	
	'reset_body' => "Натисніть нижче, щоб змінити пароль на сайті ^site_title.\n\n^url\n\nКрім того, введіть код у відповідне поле.\n\nКод: ^code\n\Якщо Ви не робили запит на зміну паролю, то просто проігноруйте повідомлення.\n\nДякую, \n^site_title",
	'reset_subject' => '^site_title - Скидання забутого паролю',
	
	'to_handle_prefix' => "^, \n\n",

	'u_approved_body' => "Побачити свій новий профіль можна тут:\n\n^url\n\nДякую,\n\n^site_title",
	'u_approved_subject' => "Користувач ^site_title був підтверджений",
	'u_registered_body' => "Новий користувач зареєстрований як ^u_handle.\n\nНатисніть нижче, щоб подивитися профіль користувача:\n\n^url\n\nДякую,\n\n^site_title",
	'u_registered_subject' => "^site_title - Зареєстрований новий користувач",
	'u_to_approve_body' => "Новий користувач зареєстрований як ^u_handle.\n\nНатисніть нижче, щоб підтвердити користувача:\n\n^url\n\nНатисніть нижче, щоб передивитися список користувачів, очікуючих підтвердження:\n\n^a_url\n\nДякую,\n\n^site_title",
	
	'wall_post_subject' => "^site_title - Запис на Вашій стіні",
	'wall_post_body' => "^f_handle залишив запис на Вашій стіні на сайті ^site_title:\n\n^open^post^close\n\nДля відповіді натисніть тут:\n\n^url\n\nДякую,\n\n^site_title",

	'welcome_body' => "Дякуємо за реєстрацію на сайті! ^site_title.\n\n^custom^confirmВаші дані:\n\nІм\'я користувача: ^handle\nЕлектронна пошта: ^email\nПароль: ^password\n\nЗапам\'ятайте цю інформацію\n\nДякую, \n\n^site_title\n^url",
	'welcome_confirm' => "Будь ласка, натисніть нижче, щоб підтвердити свою адресу електронної пошти.\n\n^url\n\n",
	'welcome_subject' => 'Ласкаво просимо на сайт ^site_title!',
);