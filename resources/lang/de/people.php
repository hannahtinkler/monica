<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [

    //index
    'people_not_found' => 'Kontakt nicht gefunden',
    'people_list_number_kids' => '1 Kind|:count Kinder',
    'people_list_last_updated' => 'Zuletzt aufgerufen:',
    'people_list_number_reminders' => '1 Erinnerung|:count Erinnerungen',
    'people_list_blank_title' => 'Du hast noch niemanden in deinem Konto angelegt',
    'people_list_blank_cta' => 'Neuer Kontakt',
    'people_list_sort' => 'Sortieren',
    'people_list_stats' => '1 Kontakt|:count Kontakte',
    'people_list_firstnameAZ' => 'Nach Vorname sortieren A → Z',
    'people_list_firstnameZA' => 'Nach Vorname sortieren Z → A',
    'people_list_lastnameAZ' => 'Nach Nachname sortieren A → Z',
    'people_list_lastnameZA' => 'Nach Nachname sortieren Z → A',
    'people_list_lastactivitydateNewtoOld' => 'Neueste Aktivitäten zuerst anzeigen',
    'people_list_lastactivitydateOldtoNew' => 'Älteste Aktivitäten zuerst anzeigen',
    'people_list_filter_tag' => 'Es werden alle Kontakte mit den folgenden Tags angezeigt',
    'people_list_clear_filter' => 'Filter löschen',
    'people_list_contacts_per_tags' => '1 Kontakt|:count Kontakte',
    'people_list_show_dead' => 'Verstorbene Kontakte anzeigen (:count)',
    'people_list_hide_dead' => 'Verstorbene Kontakte ausblenden (:count)',
    'people_search' => 'Suche in deinen Kontakten...',
    'people_search_no_results' => 'Keine Ergebnisse gefunden',
    'people_search_next' => 'Nächste',
    'people_search_prev' => 'Vorherige',
    'people_search_rows_per_page' => 'Rows per page',
    'people_search_of' => 'von',
    'people_search_page' => 'Seite',
    'people_search_all' => 'Alle',
    'people_add_new' => 'Neue Person hinzufügen',
    'people_list_account_usage' => 'Dein Account nutzt: :current/:limit Kontakte',
    'people_list_account_upgrade_title' => 'Führe ein Upgrade aus, um alle Funktionen freizuschalten.',
    'people_list_account_upgrade_cta' => 'Jetzt upgraden',
    'people_list_untagged' => 'Unmarkierte Kontakte anzeigen',
    'people_list_filter_untag' => 'Es werden alle Kontakte ohne Tags angezeigt',

    // people add
    'people_add_title' => 'Person hinzufügen',
    'people_add_missing' => 'Keine Person gefunden - neue Person jetzt anlegen',
    'people_add_firstname' => 'Vorname',
    'people_add_middlename' => 'zweiter Vorname (Optional)',
    'people_add_lastname' => 'Nachname (Optional)',
    'people_add_nickname' => 'Spitzname (optional)',
    'people_add_cta' => 'Person hinzufügen',
    'people_save_and_add_another_cta' => 'Hinzufügen und weitere Person anlegen',
    'people_add_success' => ':name wurde erfolgreich angelegt.',
    'people_add_gender' => 'Geschlecht',
    'people_delete_success' => 'Der Kontakt wurde gelöscht',
    'people_delete_message' => 'Kontakt löschen',
    'people_delete_confirmation' => 'Möchtest du den Kontakt wirklich löschen? Es gibt kein Zurück.',
    'people_add_birthday_reminder' => 'Gratuliere :name zum Geburtstag',
    'people_add_birthday_reminder_deceased' => 'Heute hätte, :name, seinen Geburtstag gefeiert',
    'people_add_import' => 'Möchtest du Kontakte <a href=":url">importieren</a>?',
    'people_edit_email_error' => 'Es gibt bereits ein Kontakt in deinem Konto mit dieser e-Mail-Adresse. Bitte wähle eine anderen.',
    'people_export' => 'Als vCard exportieren',
    'people_add_reminder_for_birthday' => 'Jährliche Geburtstagserinnerung erstellen',

    // show
    'section_contact_information' => 'Kontaktinformationen',
    'section_personal_activities' => 'Aktivitäten',
    'section_personal_reminders' => 'Erinnerungen',
    'section_personal_tasks' => 'Aufgaben',
    'section_personal_gifts' => 'Geschenke',
    'section_personal_notes' => 'Notizen',

    // archived contacts
    'list_link_to_active_contacts' => 'Dies sind archivierte Kontakte. Hier gelangen Sie zur <a href=":url">Liste aktiver Kontakte</a>.',
    'list_link_to_archived_contacts' => 'Liste der archivierten Kontakte',

    // Header
    'me' => 'Das bist du',
    'edit_contact_information' => 'Kontaktinformationen bearbeiten',
    'contact_archive' => 'Kontakt archivieren',
    'contact_unarchive' => 'Nicht gespeicherter Kontakt',
    'contact_archive_help' => 'Archivierte Kontakte werden nicht in der Kontaktliste angezeigt, erscheinen aber weiterhin in den Suchergebnissen.',
    'call_button' => 'Telefonat vermerken',
    'set_favorite' => 'Favoriten werden in der Kontaktliste ganz oben angezeigt',

    // Stay in touch
    'stay_in_touch' => 'In Kontakt bleiben',
    'stay_in_touch_frequency' => 'Jeden Tag in Kontakt bleiben|Alle {count} Tage in Kontakt bleiben',
    'stay_in_touch_invalid' => 'Die Zahl muss größer als 0 sein.',
    'stay_in_touch_premium' => 'Du musst dein Konto upgraden, um diese Funktion nutzen zu können',
    'stay_in_touch_modal_title' => 'In Kontakt bleiben',
    'stay_in_touch_modal_desc' => 'Wir können dich per E-Mail daran erinnern, in regelmäßigen Abständen mit {firstname} in Kontakt zu bleiben.',
    'stay_in_touch_modal_label' => 'Sende mir eine E-Mail jeden... {count} Tag|Sende mir eine E-Mail alle... {count} Tage',

    // Calls
    'modal_call_title' => 'Telefonat vermerken',
    'modal_call_comment' => 'Worüber habt ihr geredet? (optional)',
    'modal_call_exact_date' => 'Das Telefonat war am',
    'modal_call_who_called' => 'Wer hat angerufen?',
    'modal_call_emotion' => 'Möchten sie speichern wie Sie sich während das Anrufs fühlten? (optional)',
    'calls_add_success' => 'Telefonat gespeichert.',
    'call_delete_confirmation' => 'Möchtest du das Telefonat wirklich löschen?',
    'call_delete_success' => 'Das Telefonat wurde erfolgreich gelöscht',
    'call_title' => 'Telefonate',
    'call_empty_comment' => 'Keine Details',
    'call_blank_title' => 'Behalte deine Telefonate mit {name} im Auge',
    'call_blank_desc' => 'Du hast {name} angerufen',
    'call_you_called' => 'Du hast angerufen',
    'call_he_called' => '{name} rief an',
    'call_emotions' => 'Emotionen:',

    // Conversation
    'conversation_blank' => 'Führe ein Logbuch über die Konversationen, die du mit :name auf Social Media, via SMS etc. hast...',
    'conversation_delete_link' => 'Unterhaltung löschen',
    'conversation_edit_title' => 'Unterhaltung bearbeiten',
    'conversation_edit_delete' => 'Bist du sicher, dass du diese Unterhaltung löschen willst? Dies kann nicht rückgängig gemacht werden.',
    'conversation_add_success' => 'Die Unterhaltung wurde erfolgreich hinzugefügt.',
    'conversation_edit_success' => 'Die Unterhaltung wurde erfolgreich aktualisiert.',
    'conversation_delete_success' => 'Die Unterhaltung wurde gelöscht.',
    'conversation_add_title' => 'Eine neue Unterhaltung ins Logbuch protokollieren',
    'conversation_add_when' => 'Wann hattet ihr diese Unterhaltung?',
    'conversation_add_who_wrote' => 'Wer machte die Aussage?',
    'conversation_add_how' => 'Über welches Medium habt ihr kommuniziert?',
    'conversation_add_you' => 'Ich selber',
    'conversation_add_content' => 'Schreibe hier, was gesagt wurde',
    'conversation_add_what_was_said' => 'Was war der Gesprächsinhalt?',
    'conversation_add_another' => 'Eine weitere Nachricht hinzufügen',
    'conversation_add_error' => 'Sie müssen mindestens eine Nachricht hinzufügen.',
    'conversation_list_table_messages' => 'Nachrichten',
    'conversation_list_table_content' => 'Teilinhalt (letzte Nachricht)',
    'conversation_list_title' => 'Unterhaltungen',
    'conversation_list_cta' => 'Unterhaltung protokollieren',

    // age - birthday
    'birthdate_not_set' => 'Geburtstag noch nicht gesetzt',
    'age_approximate_in_years' => 'ungefähr :age Jahre alt',
    'age_exact_in_years' => ':age Jahre alt',
    'age_exact_birthdate' => 'geboren am :date',

    // Last called
    'last_called' => 'Letztes Telefonat: :date',
    'last_called_empty' => 'Letztes Telefonat: unbekannt',
    'last_activity_date' => 'Letzte gemeinsame Aktivität: :date',
    'last_activity_date_empty' => 'Letzte gemeinsame Aktivität: unbekannt',

    // additional information
    'information_edit_success' => 'Das Profil wurde erfolgreich aktualisiert',
    'information_edit_title' => 'Ändere :name\'s persönliche Daten',
    'information_edit_max_size' => 'Maximal :size Kb.',
    'information_edit_max_size2' => 'Maximal :size KB',
    'information_edit_firstname' => 'Vorname',
    'information_edit_lastname' => 'Nachname (Optional)',
    'information_edit_description' => 'Beschreibung (optional)',
    'information_edit_description_help' => 'Wird in der Kontaktliste verwendet, um gegebenenfalls Kontext hinzuzufügen.',
    'information_edit_unknown' => 'Ich kenne das Alter dieser Person nicht',
    'information_edit_probably' => 'Diese Person ist wahrscheinlich',
    'information_edit_not_year' => 'Ich weiß den Tag und Monat des Geburtsdatums dieser Person, aber nicht das Jahr…',
    'information_edit_exact' => 'Ich kenne den Geburtstag der Person...',
    'information_edit_birthdate_label' => 'Geburtstag',
    'information_no_work_defined' => 'keine Arbeitsplatz-Informationen angegeben',
    'information_work_at' => 'bei :company',
    'work_add_cta' => 'Ändere Arbeitsplatz-Informationen',
    'work_edit_success' => 'Arbeitsplatz-Informationen wurden erfolgreich aktualisiert',
    'work_edit_title' => 'Ändere :name\'s Beruf-Informationen',
    'work_edit_job' => 'Position (optional)',
    'work_edit_company' => 'Firma (optional)',
    'work_information' => 'Arbeitsinformationen',

    // food preferences
    'food_preferences_add_success' => 'Essensvorlieben gespeichert',
    'food_preferences_edit_description' => 'Vielleicht hat :firstname oder jemand in der :family Familie eine Allergie oder mag einen bestimmten Wein nicht. Vermerke so etwas hier, damit du dich bei der nächsten Einladung zum Abendessen daran erinnerst',
    'food_preferences_edit_description_no_last_name' => 'Vielleicht hat :firstname eine Allergie oder mag einen bestimmten Wein nicht. Vermerke so etwas hier, damit du dich bei der nächsten Einladung zum Abendessen daran erinnerst',
    'food_preferences_edit_title' => 'Gib Essensvorlieben an',
    'food_preferences_edit_cta' => 'Speichere Essensvorlieben',
    'food_preferences_title' => 'Essensvorlieben',
    'food_preferences_cta' => 'Essensvorlieben hinzufügen',

    // reminders
    'reminders_blank_title' => 'Gibt es etwas, an das du über :name erinnert werden willst?',
    'reminders_blank_add_activity' => 'Erinnerung hinzufügen',
    'reminders_add_title' => 'Woran würdest du gerne über :name erinnert werden?',
    'reminders_add_description' => 'Erinnere mich daran...',
    'reminders_add_next_time' => 'Wann möchtest du das nächste mal daran erinnert werden?',
    'reminders_add_once' => 'Erinnere mich daran nur einmal',
    'reminders_add_recurrent' => 'Erinnere mich daran jeden',
    'reminders_add_starting_from' => 'angefangen vom oben angegebenen Datum',
    'reminders_add_cta' => 'Erinnerung hinzufügen',
    'reminders_edit_update_cta' => 'Erinnerung ändern',
    'reminders_add_error_custom_text' => 'Du musst einen Text für die Erinnerung angeben',
    'reminders_create_success' => 'Die Erinnerung wurde erfolgreich hinzugefügt',
    'reminders_delete_success' => 'Die Erinnerung wurde erfolgreich gelöscht',
    'reminders_update_success' => 'Die Erinnerung wurde erfolgreich geändert',
    'reminders_add_optional_comment' => 'Optionaler Kommentar',

    'reminder_frequency_day' => 'jeden Tag | alle :number Tage',
    'reminder_frequency_week' => 'jede Woche|alle :number Wochen',
    'reminder_frequency_month' => 'jeden Monat|alle :number Monate',
    'reminder_frequency_year' => 'jedes jahr|alle :number Jahre',
    'reminder_frequency_one_time' => 'am :date',
    'reminders_delete_confirmation' => 'Möchtest du diese Erinnerung wirklich löschen?',
    'reminders_delete_cta' => 'löschen',
    'reminders_next_expected_date' => 'am',
    'reminders_cta' => 'Erinnerung hinzufügen',
    'reminders_description' => 'Wir werden eine E-Mail für jede der unten stehenden Erinnerungen verschicken. Erinnerungen werden immer morgens verschickt. Erinnerungen, die automatisch für Geburtstage angelegt wurden, können nicht gelöscht werden. Wenn du dieses Datum ändern willst, dann ändere den Geburtstag des Kontakts.',
    'reminders_one_time' => 'Einmal',
    'reminders_type_week' => 'Woche',
    'reminders_type_month' => 'Monat',
    'reminders_type_year' => 'Jahr',
    'reminders_birthday' => 'Geburtstag von :name',
    'reminders_free_plan_warning' => 'Du befindest dich im kostenlosen Abonnement. Hier werden keine E-Mails versendet. Um die Erinnerungs-E-Mails zu erhalten upgrade deinen Account.',

    // relationships
    'relationship_form_add' => 'Eine neue Beziehung hinzufügen',
    'relationship_form_edit' => 'Eine bestehende Beziehung ändern',
    'relationship_form_is_with' => 'Diese Person ist...',
    'relationship_form_is_with_name' => ':name ist...',
    'relationship_form_add_choice' => 'Wer ist die Beziehung zu?',
    'relationship_form_create_contact' => 'Neue Person hinzufügen',
    'relationship_form_associate_contact' => 'Ein bestehender Kontakt',
    'relationship_form_associate_dropdown' => 'Wählen Sie einen vorhandenen Kontakt aus der Dropdown-Liste unten aus',
    'relationship_form_associate_dropdown_placeholder' => 'Suche und wähle einen bestehenden Kontakt',
    'relationship_form_also_create_contact' => 'Erstellen Sie einen Kontakt-Eintrag für diese Person.',
    'relationship_form_add_description' => 'Dies erlaubt dir diese Person wie jeden anderen Kontakt zu verwalten.',
    'relationship_form_add_no_existing_contact' => 'Sie haben zur Zeit keine Kontakte, die mit :name in Verbindung gebracht werden können.',
    'relationship_delete_confirmation' => 'Sind Sie sicher, dass Sie diese Beziehung löschen wollen? Das Löschen ist dauerhaft.',
    'relationship_unlink_confirmation' => 'Sind Sie sicher, dass Sie diese Beziehung löschen wollen? Diese Person wird nicht gelöscht - nur die Beziehung zwischen den beiden.',
    'relationship_form_add_success' => 'Die Beziehung wurde erfolgreich gesetzt.',
    'relationship_form_deletion_success' => 'Die Beziehung wurde gelöscht.',

    // tasks
    'tasks_title' => 'Aufgaben',
    'tasks_blank_title' => 'Du hast noch keine Aufgaben.',
    'tasks_form_title' => 'Titel',
    'tasks_form_description' => 'Beschreibung (optional)',
    'tasks_add_task' => 'Aufgabe hinzufügen',
    'tasks_delete_success' => 'Die Aufgabe wurde erfolgreich gelöscht',
    'tasks_complete_success' => 'Der Status der Aufgabe wurder erfolgreich geändert',

    // activities
    'activity_title' => 'Aktivitäten',
    'activity_type_category_simple_activities' => 'Einfacher Zeitvertreib',
    'activity_type_category_sport' => 'Sport',
    'activity_type_category_food' => 'Essen',
    'activity_type_category_cultural_activities' => 'Kulturelle Aktivitäten',
    'activity_type_just_hung_out' => 'einfach zusammen Zeit verbracht',
    'activity_type_watched_movie_at_home' => 'zu Hause einen Film gesehen',
    'activity_type_talked_at_home' => 'zu Hause geredet',
    'activity_type_did_sport_activities_together' => 'haben zusammen Sport gemacht',
    'activity_type_ate_at_his_place' => 'bei Ihnen gegessen',
    'activity_type_went_bar' => 'in eine Bar gegangen',
    'activity_type_ate_at_home' => 'zu Hause gegessen',
    'activity_type_picnicked' => 'gepicknickt',
    'activity_type_ate_restaurant' => 'im Restaurant gegessen',
    'activity_type_went_theater' => 'ins Theater gegangen',
    'activity_type_went_concert' => 'zu einem Konzert gegangen',
    'activity_type_went_play' => 'ein Theaterstück angesehen',
    'activity_type_went_museum' => 'ins Museum gegangen',
    'activities_add_activity' => 'Aktivität hinzufügen',
    'activities_add_more_details' => 'Weitere Details hinzufügen',
    'activities_add_emotions' => 'Emotionen hinzufügen',
    'activities_add_category' => 'Kategorie angeben',
    'activities_add_participants_cta' => 'Teilnehmer hinzufügen',
    'activities_item_information' => ':Activity. Fand am :date statt',
    'activities_add_title' => 'Was hast du mit {name} gemacht?',
    'activities_summary' => 'Beschreibe, was ihr gemacht habt',
    'activities_add_pick_activity' => '(Optional) Möchten Sie diese Aktivität kategorisieren? Das müssen Sie nicht, aber es wird Ihnen später Statistiken liefern.',
    'activities_add_date_occured' => 'Die Aktivität war am...',
    'activities_add_participants' => 'Wer hat außer {name} an dieser Aktivität teilgenommen? (optional)',
    'activities_add_emotions_title' => 'Möchtest du protokollieren, wie du dich während dieser Aktivität gefühlt hast? (optional)',
    'activities_blank_title' => 'Behalte im Auge, was du mit {name} unternommen hast und worüber ihr geredet habt',
    'activities_blank_add_activity' => 'Aktivität hinzufügen',
    'activities_add_success' => 'Aktivität erfolgreich hinzugefügt',
    'activities_add_error' => 'Fehler beim Hinzufügen der Aktivität',
    'activities_update_success' => 'Aktivität erfolgreich aktualisiert',
    'activities_delete_success' => 'Aktivität erfolgreich gelöscht',
    'activities_who_was_involved' => 'Wer war beteiligt?',
    'activities_activity' => 'Kategorie',
    'activities_view_activities_report' => 'Aktivitätsbericht anzeigen',
    'activities_profile_title' => 'Aktivitätsbericht zwischen :name und dir',
    'activities_profile_subtitle' => 'Sie haben gesamt :total_activities Aktivitäten mit :name und :activities_last_twelve_months Aktivitäten in den letzten 12 Monaten aufgezeichnet.|Sie haben gesamt :total_activities Aktivitäten mit :name und :activities_last_twelve_months Aktivitäten in den letzten 12 Monaten aufgezeichnet.',
    'activities_profile_year_summary_activity_types' => 'Hier ist eine Aufzeichnung von Aktivitäten, die Sie gemeinsam im letzten Jahr erlebt haben',
    'activities_profile_year_summary' => 'Das haben Sie zwei im :year gemeinsam gemacht',
    'activities_profile_number_occurences' => ':value Aktivität|:value Aktivitäten',
    'activities_list_participants' => 'Teilnehmer:',
    'activities_list_emotions' => 'Emotionen gefühlt:',
    'activities_list_date' => 'Geschehen am',
    'activities_list_category' => 'Kategorie:',

    // notes
    'notes_create_success' => 'Die Notiz wurde erfolgreich hinzugefügt',
    'notes_update_success' => 'Die Notiz wurde erfolgreich aktualisiert',
    'notes_delete_success' => 'Die Notiz wurde erfolgreich gelöscht',
    'notes_add_cta' => 'Notiz hinzufügen',
    'notes_favorite' => 'Markieren/Markierung entfernen',
    'notes_delete_title' => 'Notiz löschen',
    'notes_delete_confirmation' => 'Möchtest du diese Notiz wirklich löschen?',

    // gifts
    'gifts_title' => 'Geschenke',
    'gifts_add_success' => 'Geschenk erfolgreich hinzugefügt',
    'gifts_delete_success' => 'Geschenk erfolgreich gelöscht',
    'gifts_delete_confirmation' => 'Möchtest du das Geschenk wirklich löschen?',
    'gifts_add_gift' => 'Geschenk hinzufügen',
    'gifts_link' => 'Link',
    'gifts_for' => 'Für: {name}',
    'gifts_delete_cta' => 'Löschen',
    'gifts_add_title' => 'Geschenkverwaltung für :name',
    'gifts_add_gift_idea' => 'Geschenkidee',
    'gifts_add_gift_already_offered' => 'Bereits verschenkt',
    'gifts_add_gift_received' => 'Geschenk erhalten',
    'gifts_add_gift_title' => 'Was ist es für ein Geschenk?',
    'gifts_add_gift_name' => 'Geschenkname',
    'gifts_add_link' => 'Link zur Website (optional)',
    'gifts_add_value' => 'Wert (optional)',
    'gifts_add_comment' => 'Kommentar (optional)',
    'gifts_add_recipient' => 'Empfänger (optional)',
    'gifts_add_recipient_field' => 'Empfänger',
    'gifts_add_photo' => 'Foto (optional)',
    'gifts_add_photo_title' => 'Foto für dieses Geschenk hinzufügen',
    'gifts_add_someone' => 'Dieses Geschenk ist insbesondere für jemanden in {name}\'s Familie',
    'gifts_delete_title' => 'Ein Geschenk löschen',
    'gifts_ideas' => 'Geschenkideen',
    'gifts_offered' => 'Verschenkte Geschenke',
    'gifts_offered_as_an_idea' => 'Als Idee markieren',
    'gifts_received' => 'Erhaltene Geschenke',
    'gifts_view_comment' => 'Kommentar anzeigen',
    'gifts_mark_offered' => 'Als angeboten markieren',
    'gifts_update_success' => 'Das Geschenk wurde erfolgreich aktualisiert',

    // debts
    'debt_delete_confirmation' => 'Möchtest du die Schulden wirklich löschen?',
    'debt_delete_success' => 'Die Schulden wurden erfolgreich gelöscht',
    'debt_add_success' => 'Die Schulden wurden erfolgreich hinzugefügt',
    'debt_title' => 'Schulden',
    'debt_add_cta' => 'Schulden hinzufügen',
    'debt_you_owe' => 'Du schuldest :amount',
    'debt_they_owe' => ':name schuldet dir :amount',
    'debt_add_title' => 'Schuldenverwaltung',
    'debt_add_you_owe' => 'Du schuldest :name',
    'debt_add_they_owe' => ':name schuldet dir',
    'debt_add_amount' => 'eine Summe von',
    'debt_add_reason' => 'aus folgendem Grund (optional)',
    'debt_add_add_cta' => 'Schulden hinzufügen',
    'debt_edit_update_cta' => 'Schulden bearbeiten',
    'debt_edit_success' => 'Die Schulden wurden erfolgreich aktualisiert',
    'debts_blank_title' => 'Verwalte die Schulden zwischen dir und :name',

    // tags
    'tag_edit' => 'Tag bearbeiten',
    'tag_add' => 'Stichworte hinzufügen',
    'tag_add_search' => 'Stichwort hinzufügen oder suchen',
    'tag_no_tags' => 'Bisher keine Stichworte vorhanden',

    // Introductions
    'introductions_sidebar_title' => 'Wie ihr euch kennengelernt habt',
    'introductions_blank_cta' => 'Beschreibe, wie du :name kennengelernt hast',
    'introductions_title_edit' => 'Wie hast du :name kennengelernt?',
    'introductions_additional_info' => 'Beschreibe, wo und wann ihr euch kennengelernt habt',
    'introductions_edit_met_through' => 'Hat euch jemand vorgestellt?',
    'introductions_no_met_through' => 'Keiner',
    'introductions_first_met_date' => 'Datum des ersten Treffens',
    'introductions_no_first_met_date' => 'Ich weiß nicht mehr wann wir uns das erste mal getroffen haben',
    'introductions_first_met_date_known' => 'An diesem Datum haben wir uns das erste mal getroffen',
    'introductions_add_reminder' => 'Erstelle eine Erinnerung für den Jahrestag unseres ersten Zusammentreffens',
    'introductions_update_success' => 'Euer erstes Kennenlernen wurde erfolgreich geändert',
    'introductions_met_through' => 'Kennengelernt durch <a href=":url">:name</a>',
    'introductions_met_date' => 'Am :date',
    'introductions_reminder_title' => 'Jahrestag eures ersten Zusammentreffens',

    // Deceased
    'deceased_reminder_title' => 'Todestag von :name',
    'deceased_mark_person_deceased' => 'Diese Person ist verstorben',
    'deceased_know_date' => 'Ich weiß das Datum an dem diese Person verstarb',
    'deceased_add_reminder' => 'Erstelle eine Erinnerung für den Todestag',
    'deceased_label' => 'Verstorben',
    'deceased_date_label' => 'Todestag',
    'deceased_label_with_date' => 'Verstorben am :date',
    'deceased_age' => 'Todesalter',

    // Contact information
    'contact_info_title' => 'Kontaktinformationen',
    'contact_info_form_content' => 'Inhalt',
    'contact_info_form_contact_type' => 'Kontakt Art',
    'contact_info_form_personalize' => 'Anpassen',
    'contact_info_address' => 'Wohnt in',

    // Addresses
    'contact_address_title' => 'Adressen',
    'contact_address_form_name' => 'Titel (optional)',
    'contact_address_form_street' => 'Straße (optional)',
    'contact_address_form_city' => 'Stadt (optional)',
    'contact_address_form_province' => 'Bundesland (optional)',
    'contact_address_form_postal_code' => 'Postleitzahl (optional)',
    'contact_address_form_country' => 'Land (optional)',
    'contact_address_form_latitude' => 'Geographische Breite (nur Nummern) (optional)',
    'contact_address_form_longitude' => 'Geographische Länge (nur Nummern) (optional)',

    // Pets
    'pets_kind' => 'Tierart',
    'pets_name' => 'Name (optional)',
    'pets_create_success' => 'Das Haustier wurde erfolgreich hinzugefügt',
    'pets_update_success' => 'Das Haustier wurde erfolgreich geändert',
    'pets_delete_success' => 'Das Haustier wurde erfolgreich entfernt',
    'pets_title' => 'Haustiere',
    'pets_reptile' => 'Reptil',
    'pets_bird' => 'Vogel',
    'pets_cat' => 'Katze',
    'pets_dog' => 'Hund',
    'pets_fish' => 'Fisch',
    'pets_hamster' => 'Hamster',
    'pets_horse' => 'Pferd',
    'pets_rabbit' => 'Hase',
    'pets_rat' => 'Ratte',
    'pets_small_animal' => 'Kleintier',
    'pets_other' => 'Anderes',

    // life events
    'life_event_list_tab_life_events' => 'Lebensereignisse',
    'life_event_list_tab_other' => 'Notizen, Erinnerungen, ...',
    'life_event_list_title' => 'Lebensereignisse',
    'life_event_blank' => 'Notiere dir zukünftige Lebensereignisse von {name}.',
    'life_event_list_cta' => 'Lebensereignis hinzufügen',
    'life_event_create_category' => 'Alle Kategorien',
    'life_event_create_life_event' => 'Lebensereignis hinzufügen',
    'life_event_create_default_title' => 'Titel (optional)',
    'life_event_create_default_story' => 'Geschichte (optional)',
    'life_event_create_date' => 'Du muss keinen Monat oder einen Tag angeben - nur das Jahr ist obligatorisch.',
    'life_event_create_default_description' => 'Fügen Sie Informationen hinzu',
    'life_event_create_add_yearly_reminder' => 'Eine jährliche Erinnerung für dieses Ereignis hinzufügen',
    'life_event_create_success' => 'Das Lebensereignis wurde hinzugefügt',
    'life_event_delete_title' => 'Lebensereignis löschen',
    'life_event_delete_description' => 'Möchten Sie das Lebensereignis löschen? Dies kann nicht rückgängig gemacht werden.',
    'life_event_delete_success' => 'Das Ereignis wurde gelöscht',
    'life_event_date_it_happened' => 'Tag an dem es passierte',
    'life_event_category_work_education' => 'Arbeit & Ausbildung',
    'life_event_category_family_relationships' => 'Familie & Beziehungen',
    'life_event_category_home_living' => 'Home & living',
    'life_event_category_health_wellness' => 'Gesundheit & Wellness',
    'life_event_category_travel_experiences' => 'Reisen & Erfahrungen',
    'life_event_sentence_new_job' => 'Neuen Arbeitsplatz angetreten',
    'life_event_sentence_retirement' => 'Im Ruhestand',
    'life_event_sentence_new_school' => 'Schulbeginn',
    'life_event_sentence_study_abroad' => 'Studium im Ausland',
    'life_event_sentence_volunteer_work' => 'Anfang vom Praktikum',
    'life_event_sentence_published_book_or_paper' => 'Veröffentlicht ein Buch',
    'life_event_sentence_military_service' => 'Militärdienst angetreten',
    'life_event_sentence_new_relationship' => 'Beginn einer Beziehung',
    'life_event_sentence_engagement' => 'Hat sich verlobt',
    'life_event_sentence_marriage' => 'Verheiratet seit',
    'life_event_sentence_anniversary' => 'Jahrestag',
    'life_event_sentence_expecting_a_baby' => 'Erwartet ein baby',
    'life_event_sentence_new_child' => 'Hat ein Kind',
    'life_event_sentence_new_family_member' => 'Familienmitglied hinzugefügt',
    'life_event_sentence_new_pet' => 'Hat ein Haustier',
    'life_event_sentence_end_of_relationship' => 'Ende einer Beziehung',
    'life_event_sentence_loss_of_a_loved_one' => 'Einen geliebten Menschen verloren',
    'life_event_sentence_moved' => 'Umgezogen',
    'life_event_sentence_bought_a_home' => 'Ein Haus gekauft',
    'life_event_sentence_home_improvement' => 'Hat das Zuhause renoviert',
    'life_event_sentence_holidays' => 'Urlaub machen',
    'life_event_sentence_new_vehicle' => 'Neues Fahrzeug erhalten',
    'life_event_sentence_new_roommate' => 'Mitbewohner/in bekommen',
    'life_event_sentence_overcame_an_illness' => 'Krankheit überwunden',
    'life_event_sentence_quit_a_habit' => 'Gewohnheit beendet',
    'life_event_sentence_new_eating_habits' => 'Neue Essgewohnheit begonnen',
    'life_event_sentence_weight_loss' => 'Gewicht abgenommen',
    'life_event_sentence_wear_glass_or_contact' => 'Hat angefangen, eine Brille oder Kontaktlinsen zu tragen',
    'life_event_sentence_broken_bone' => 'Knochen gebrochen',
    'life_event_sentence_removed_braces' => 'Zahnspange entfernt',
    'life_event_sentence_surgery' => 'Hatte eine Operation',
    'life_event_sentence_dentist' => 'Ging zum Zahnarzt',
    'life_event_sentence_new_sport' => 'Hat eine Sportart begonnen',
    'life_event_sentence_new_hobby' => 'Ein Hobby begonnen',
    'life_event_sentence_new_instrument' => 'Ein neues Musik-Instrument gelernt',
    'life_event_sentence_new_language' => 'Eine neue Sprache gelernt',
    'life_event_sentence_tattoo_or_piercing' => 'Hat einen Tattoo oder Piercing bekommen',
    'life_event_sentence_new_license' => 'Lizenz erhalten',
    'life_event_sentence_travel' => 'Reise',
    'life_event_sentence_achievement_or_award' => 'Wurde ausgezeichnet',
    'life_event_sentence_changed_beliefs' => 'Änderte Überzeugung',
    'life_event_sentence_first_word' => 'Zum ersten mal Gesprochen',
    'life_event_sentence_first_kiss' => 'Der erste Kuss',

    // documents
    'document_list_title' => 'Dokumente',
    'document_list_cta' => 'Dokument hochladen',
    'document_list_blank_desc' => 'Hier können Sie Dokumente im Zusammenhang mit dieser Person speichern.',
    'document_upload_zone_cta' => 'Datei hochladen',
    'document_upload_zone_progress' => 'Das Dokument wird hochgeladen...',
    'document_upload_zone_error' => 'Es ist ein Fehler beim hochladen des Dokumentes aufgetreten, bitte versuchen sie es erneut.',

    // Photos
    'photo_title' => 'Fotos',
    'photo_list_title' => 'Zugehörige Fotos',
    'photo_list_cta' => 'Foto hochladen',
    'photo_list_blank_desc' => 'Sie können Bilder zu diesem Kontakt speichern. Jetzt hochladen!',
    'photo_upload_zone_cta' => 'Foto hochladen',
    'photo_current_profile_pic' => 'Aktuelles Profilbild',
    'photo_make_profile_pic' => 'Zu Profilbild machen',
    'photo_delete' => 'Bild löschen',
    'photo_next' => 'Next photo ❯',
    'photo_previous' => '❮ Previous photo',

    // Avatars
    'avatar_change_title' => 'Avatar ändern',
    'avatar_question' => 'Welchen Avatar möchtest du verwenden?',
    'avatar_default_avatar' => 'Den Standard-Avatar',
    'avatar_adorable_avatar' => 'Den niedlichen Avatar',
    'avatar_gravatar' => 'Den Gravatar, welcher der E-Mail-Adresse dieser Person zugeordnet ist. <a href="https://gravatar.com/">Gravatar</a> ist ein globales System, mit dem Benutzer E-Mail-Adressen mit Fotos verknüpfen können.',
    'avatar_current' => 'Aktuellen Avatar beibehalten',
    'avatar_photo' => 'Ein Foto hochladen',
    'avatar_crop_new_avatar_photo' => 'Neuen Avatar zuschneiden',

    // emotions
    'emotion_this_made_me_feel' => 'Dadurch fühlen sie sich…',

    // logs
    'auditlogs_link' => 'Verlauf',
    'auditlogs_title' => 'Alles, was :name passiert ist',
    'auditlogs_breadcrumb' => 'Verlauf',
    'auditlogs_author' => 'Nach :name am :date',

    // contact field label
    'contact_field_label_home' => 'Home',
    'contact_field_label_work' => 'Arbeit',
    'contact_field_label_cell' => 'Mobil',
    'contact_field_label_fax' => 'Fax',
    'contact_field_label_pager' => 'Pager',
    'contact_field_label_main' => 'Hauptinformationen',
    'contact_field_label_other' => 'Sonstiges',
    'contact_field_label_personal' => 'Persönlich',
];
