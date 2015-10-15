<?php

return array(

  // client
  'organization' => 'Organisation',
  'name' => 'Namn',
  'website' => 'Hemsida',
  'work_phone' => 'Telefon',
  'address' => 'Adress',
  'address1' => 'Adress 1',
  'address2' => 'Adress 2',
  'city' => 'Ort',
  'state' => 'Landskap',
  'postal_code' => 'Postnummer',
  'country_id' => 'Land',
  'contacts' => 'Kontakter',
  'first_name' => 'Förnamn',
  'last_name' => 'Efternamn',
  'phone' => 'Telefon',
  'email' => 'E-post',
  'additional_info' => 'Mer info',
  'payment_terms' => 'Betalningsvillkor',
  'currency_id' => 'Valuta',
  'size_id' => 'Storlek',
  'industry_id' => 'Branch',
  'private_notes' => 'Privata anteckningar',

  // invoice
  'invoice' => 'Faktura',
  'client' => 'Kund',
  'invoice_date' => 'Fakturadatum',
  'due_date' => 'Sista betalningsdatum',
  'invoice_number' => 'Fakturanummer',
  'invoice_number_short' => 'Faktura #',
  'po_number' => 'Referensnummer',
  'po_number_short' => 'Referens #',
  'frequency_id' => 'Hur ofta',
  'discount' => 'Rabatt',
  'taxes' => 'Moms',
  'tax' => 'Moms',
  'item' => 'Artikel',
  'description' => 'Beskrivning',
  'unit_cost' => 'Enhetspris',
  'quantity' => 'Antal',
  'line_total' => 'Summa',
  'subtotal' => 'Delsumma',
  'paid_to_date' => 'Betalt',
  'balance_due' => 'Resterande belopp',
  'invoice_design_id' => 'Utseende',
  'terms' => 'Villkor',
  'your_invoice' => 'Din faktura',

  'remove_contact' => 'Ta bort kontakt',
  'add_contact' => 'Lägg till kontakt',
  'create_new_client' => 'Skapa ny kund',
  'edit_client_details' => 'Ändra kunduppgifter',
  'enable' => 'Tillgänglig',
  'learn_more' => 'Hjälp',
  'manage_rates' => 'Hantera kurser',
  'note_to_client' => 'Anteckningar till kund',
  'invoice_terms' => 'Fakturavillkor',
  'save_as_default_terms' => 'Spara som standardvillkor',
  'download_pdf' => 'Ladda ner PDF',
  'pay_now' => 'Betala nu',
  'save_invoice' => 'Spara faktura',
  'clone_invoice' => 'Kopiera faktura',
  'archive_invoice' => 'Arkivera faktura',
  'delete_invoice' => 'Ta bort faktura',
  'email_invoice' => 'E-posta faktura',
  'enter_payment' => 'Ange betalning',
  'tax_rates' => 'Momsnivåer',
  'rate' => 'Kurs',
  'settings' => 'Inställningar',
  'enable_invoice_tax' => 'Slå på <b>moms per faktura</b>',
  'enable_line_item_tax' => 'Slå på <b>moms per rad</b>',

  // navigation
  'dashboard' => 'Översikt',
  'clients' => 'Kunder',
  'invoices' => 'Fakturor',
  'payments' => 'Betalningar',
  'credits' => 'Kreditfakturor',
  'history' => 'Historik',
  'search' => 'Sök',
  'sign_up' => 'Registrera dig',
  'guest' => 'Gäst',
  'company_details' => 'Företagsinfo',
  'online_payments' => 'Onlinebetalningar',
  'notifications' => 'Meddelande',
  'import_export' => 'Importera/Exportera',
  'done' => 'Klar',
  'save' => 'Spara',
  'create' => 'Skapa',
  'upload' => 'Ladda upp',
  'import' => 'Importera',
  'download' => 'Ladda ner',
  'cancel' => 'Avbryt',
  'close' => 'Stäng',
  'provide_email' => 'Du måste ange en giltig e-postadress',
  'powered_by' => 'Powered by',
  'no_items' => 'Tomt',

  // recurring invoices
  'recurring_invoices' => 'Återkommande fakturor',
  'recurring_help' => '<p>Skicka automatiskt fakturor till kund varje vecka, månad, kvartal eller årsvis.</p>
		<p>Använd :MONTH, :QUARTER eller :YEAR för dynamiskt datum. Enkla formler fungerar också, t.ex. :MONTH-1</p>
        <p>Exempel på dynamiska fakturavariabler::</p>
        <ul>
          <li>"Medlemskap för månaden :MONTH" => "Medlemskap för månaden juli"</li>
          <li>":YEAR+1 årlig prenumeration" => "2015 årlig prenumeration"</li>
          <li>"Underhåll för :QUARTER+1" => "Underhåll för Q2"</li>
        </ul>',

  // dashboard
  'in_total_revenue' => 'i totala intäkter',
  'billed_client' => 'fakturerad kund',
  'billed_clients' => 'fakturerade kunder',
  'active_client' => 'aktiv kund',
  'active_clients' => 'aktiva kunder',
  'invoices_past_due' => 'Försenade fakturor',
  'upcoming_invoices' => 'Kommande fakturor',
  'average_invoice' => 'Genomsnittlig faktura',

  // list pages
  'archive' => 'Arkiv',
  'delete' => 'Ta bort',
  'archive_client' => 'Arkiverade kunder',
  'delete_client' => 'Borttagna kunder',
  'archive_payment' => 'Arkiverade betalningar',
  'delete_payment' => 'Borttagna betalningar',
  'archive_credit' => 'Arkiverade kreditfakturor',
  'delete_credit' => 'Borttagna kreditfakturor',
  'show_archived_deleted' => 'Visa arkiverade/borttagna',
  'filter' => 'Filter',
  'new_client' => 'Ny kund',
  'new_invoice' => 'Ny faktura',
  'new_payment' => 'Ny betalning',
  'new_credit' => 'Ny kreditfaktura',
  'contact' => 'Kontakt',
  'date_created' => 'Skapat datum',
  'last_login' => 'Senast inloggad',
  'balance' => 'Balans',
  'action' => 'Hantera',
  'status' => 'Status',
  'invoice_total' => 'Totalsumma',
  'frequency' => 'Frekvens',
  'start_date' => 'Startdatum',
  'end_date' => 'Slutdatum',
  'transaction_reference' => 'Transaktion',
  'method' => 'Metod',
  'payment_amount' => 'Betald summa',
  'payment_date' => 'Betalningsdatum',
  'credit_amount' => 'Kreditsumma',
  'credit_balance' => 'Kreditbalans',
  'credit_date' => 'Kreditdatum',
  'empty_table' => 'Ingen data tillgänglig',
  'select' => 'Välj',
  'edit_client' => 'Ändra kund',
  'edit_invoice' => 'Ändra faktura',

  // client view page
  'create_invoice' => 'Skapa faktura',
  'enter_credit' => 'Ange kredit',
  'last_logged_in' => 'Senast inloggad',
  'details' => 'Detaljer',
  'standing' => 'Summering',
  'credit' => 'Kredit',
  'activity' => 'Händelse',
  'date' => 'Datum',
  'message' => 'Meddelande',
  'adjustment' => 'Justering',
  'are_you_sure' => 'Är du säker?',

  // payment pages
  'payment_type_id' => 'Betalningssätt',
  'amount' => 'Summa',

  // account/company pages
  'work_email' => 'E-postadress',
  'language_id' => 'Språk',
  'timezone_id' => 'Tidszon',
  'date_format_id' => 'Datumformat',
  'datetime_format_id' => 'Datum-/tidformat',
  'users' => 'Användare',
  'localization' => 'Språkanpassning',
  'remove_logo' => 'Ta bort logga',
  'logo_help' => 'Giltiga format: JPEG, GIF och PNG',
  'payment_gateway' => 'Betalningstjänst',
  'gateway_id' => 'Tjänst',
  'email_notifications' => 'Notifieringar',
  'email_sent' => 'Skicka mail när faktura <b>skickas</b>',
  'email_viewed' => 'Skicka mail när faktura <b>visas</b>',
  'email_paid' => 'Skicka mail när faktura <b>betalas</b>',
  'site_updates' => 'Sajt-uppdateringar',
  'custom_messages' => 'Anpassat meddelande',
  'default_invoice_terms' => 'Ange standard <b>fakturavillkor</b>',
  'default_email_footer' => 'Ange standard <b>mailsignatur</b>',
  'import_clients' => 'Importera kunder',
  'csv_file' => 'Välj CSV-fil',
  'export_clients' => 'Exportera kunder',
  'select_file' => 'Välj fil',
  'first_row_headers' => 'Använd första raden som rubrik',
  'column' => 'Kolumn',
  'sample' => 'Exempel',
  'import_to' => 'Importera till',
  'client_will_create' => 'kund kommer skapas',
  'clients_will_create' => 'kunder kommer skapas',
  'email_settings' => 'Mail-inställningar',
  'pdf_email_attachment' => 'bifoga PDF till mail',

  // application messages
  'created_client' => 'Kund skapad',
  'created_clients' => ':count kunder skapade',
  'updated_settings' => 'Inställningar uppdaterade',
  'removed_logo' => 'Logga borttagen',
  'sent_message' => 'Meddelandet skickat',
  'invoice_error' => 'Välj kund och rätta till eventuella fel',
  'limit_clients' => 'Du kan max skapa :count kunder',
  'payment_error' => 'Något blev fel när din betalning bearbetades. Var vänlig och försök igen lite senare.',
  'registration_required' => 'Du måste registrera dig för att kunna skicka en faktura som e-post',
  'confirmation_required' => 'Var vänlig och bekräfta din e-postadress',

  'updated_client' => 'Kund uppdaterad',
  'created_client' => 'Kund skapad',
  'archived_client' => 'Kund arkiverad',
  'archived_clients' => ':count kunder arkiverade',
  'deleted_client' => 'kund borttagen',
  'deleted_clients' => ':count kunder borttagna',

  'updated_invoice' => 'Faktura uppdaterad',
  'created_invoice' => 'Faktura skapad',
  'cloned_invoice' => 'Faktura kopierad',
  'emailed_invoice' => 'Faktura skickad som e-post',
  'and_created_client' => 'och kund skapad',
  'archived_invoice' => 'Faktura arkiverad',
  'archived_invoices' => ':count fakturor arkiverade',
  'deleted_invoice' => 'Faktura borttagen',
  'deleted_invoices' => ':count fakturor borttagna',

  'created_payment' => 'Betalning registrerad',
  'archived_payment' => 'Betalning arkiverad',
  'archived_payments' => ':count betalningar arkiverade',
  'deleted_payment' => 'Betalning borttagen',
  'deleted_payments' => ':count betalningar borttagna',
  'applied_payment' => 'Betalning applicerad',

  'created_credit' => 'Kreditfaktura skapad',
  'archived_credit' => 'Kreditfaktura arkiverad',
  'archived_credits' => ':count kreditfakturor arkiverade',
  'deleted_credit' => 'Kreditfaktura borttagen',
  'deleted_credits' => ':count kreditfakturor borttagna',

  // Emails
  'confirmation_subject' => 'Bekräfta ditt Invoice Ninja konto',
  'confirmation_header' => 'Bekräfta ditt konto',
  'confirmation_message' => 'Vänligen klick på länken nedan för att bekräfta ditt konto.',
  'invoice_subject' => 'Ny faktura :invoice från :account',
  'invoice_message' => 'Klicka på länken nedan för att visa din faktura på :amount.',
  'payment_subject' => 'Betalning mottagen',
  'payment_message' => 'Tack för din betalning på :amount.',
  'email_salutation' => 'Hej :name,',
  'email_signature' => 'Vänliga hälsningar,',
  'email_from' => 'Invoice Ninja teamet',
  'user_email_footer' => 'För att anpassa dina e-post notifieringar gå till '.SITE_URL.'/settings/notifications',
  'invoice_link_message' => 'För att se din kundfaktura klicka på länken nedan:',
  'notification_invoice_paid_subject' => 'Faktura :invoice är betald av :client',
  'notification_invoice_sent_subject' => 'Faktura :invoice är skickad till :client',
  'notification_invoice_viewed_subject' => 'Faktura :invoice har setts av :client',
  'notification_invoice_paid' => 'En betalning på :amount är gjord av kunden :client för faktura :invoice.',
  'notification_invoice_sent' => 'Följande kund :client har mailats fakturan :invoice på :amount.',
  'notification_invoice_viewed' => 'Följande kund :client har sett fakturan :invoice på :amount.',
  'reset_password' => 'Du kan återställa ditt lösenord genom att klicka på länken nedan:',
  'reset_password_footer' => 'Om du inte begärt en återställning av ditt lösenord så var snäll och maila vår support: ' . CONTACT_EMAIL,


  // Payment page
  'secure_payment' => 'Säker betalning',
  'card_number' => 'Kortnummer',
  'expiration_month' => 'Giltig till månad',
  'expiration_year' => 'Giltig till år',
  'cvv' => 'CVV',

  // Security alerts
  'confide' => [
    'too_many_attempts' => 'För många felaktiga försök. Pröva igen om ett par minuter.',
    'wrong_credentials' => 'Felaktig e-postadress eller lösenord.',
    'confirmation' => 'Ditt konto har bekräftats!',
    'wrong_confirmation' => 'Felaktig bekräftelsekod.',
    'password_forgot' => 'Information angående återställning av ditt lösenord har skickats till dig via e-post.',
    'password_reset' => 'Ditt lösenord har uppdaterats.',
    'wrong_password_reset' => 'Felaktigt lösenord. Försök igen',
  ],

  // Pro Plan
  'pro_plan' => [
    'remove_logo' => ':link för att ta bort Invoice Ninja loggan genom att uppgradera till Pro Plan',
    'remove_logo_link' => 'Klicka här',
  ],

  'logout' => 'Logga ut',
  'sign_up_to_save' => 'Registrera dig för att spara ditt arbete',
  'agree_to_terms' =>'Jag godkänner Invoice Ninja :terms',
  'terms_of_service' => 'Villkor för tjänsten',
  'email_taken' => 'E-postadressen är redan registrerad',
  'working' => 'Jobbar',
  'success' => 'Lyckades',
  'success_message' => 'Du har nu registrerat dig. Klicka på länken i ditt bekräftelsemail för att verifiera din e-postadress.',
  'erase_data' => 'Detta kommer radera all din data och går ej att ångra!',
  'password' => 'Lösenord',

  'pro_plan_product' => 'Pro Plan',
  'pro_plan_description' => 'Ett års prenumeration på Invoice Ninja Pro.',
  'pro_plan_success' => 'Tack för att du väljer Invoice Ninja\'s Pro!<p/>&nbsp;<br/>
                          <b>Nästa steg</b><p/>En faktura har skickats till din angivna e-postadress.
                          Var vänlig och följ instruktionerna på fakturan för att betala för ett års
                          Pro fakturering och få tillgång till alla fantastiska Pro-funktioner.<p/>
                          Hittar du inte fakturan? Behöver du support? Vi hjälper dig!
                          -- maila oss på contact@invoiceninja.com',

  'unsaved_changes' => 'Du har osparade ändringar',
  'custom_fields' => 'Anpassade fält',
  'company_fields' => 'Företagsfält',
  'client_fields' => 'Kundfält',
  'field_label' => 'Fältrubrik',
  'field_value' => 'Fältvärde',
  'edit' => 'Ändra',
  'set_name' => 'Ange ditt företagsnamn',
  'view_as_recipient' => 'Se som mottagare',

  // product management
  'product_library' => 'Produktbibliotek',
  'product' => 'Produkt',
  'products' => 'Produkter',
  'fill_products' => 'Auto-ifyll produkter',
  'fill_products_help' => 'Välj en produkt för att automatiskt <b>fylla i beskrivning och pris</b>',
  'update_products' => 'Auto-uppdaterade produkter',
  'update_products_help' => 'Uppdatera en faktura för att automatiskt <b>uppdatera produktbiblioteket</b>',
  'create_product' => 'Skapa produkt',
  'edit_product' => 'Ändra produkt',
  'archive_product' => 'Arkivera produkt',
  'updated_product' => 'Produkt uppdaterad',
  'created_product' => 'Produkt skapad',
  'archived_product' => 'Produkt arkiverad',
  'pro_plan_custom_fields' => ':link för att slå på anpassade fält genom att uppgradera till Pro',

  'advanced_settings' => 'Avancerade inställningar',
  'pro_plan_advanced_settings' => ':link för att slå på avancerade inställningar genom att uppgradera till Pro',
  'invoice_design' => 'Fakturadesign',
  'specify_colors' => 'Ange färger',
  'specify_colors_label' => 'Välj färger som ska användas på fakturan',

  'chart_builder' => 'Diagrambyggare',
  'ninja_email_footer' => 'Använda :site för att fakturera dina kunder och få betalt online gratis!',
  'go_pro' => 'Uppgradera till Pro',

  // Quotes
  'quote' => 'Offert',
  'quotes' => 'Offerter',
  'quote_number' => 'Offertnummer',
  'quote_number_short' => 'Offert #',
  'quote_date' => 'Offertdatum',
  'quote_total' => 'Offertsumma',
  'your_quote' => 'Din offert',
  'total' => 'Totalsumma',
  'clone' => 'Kopiera',

  'new_quote' => 'Ny offert',
  'create_quote' => 'Skapa offert',
  'edit_quote' => 'Ändra offert',
  'archive_quote' => 'Arkivera offert',
  'delete_quote' => 'Ta bort offert',
  'save_quote' => 'Spara offert',
  'email_quote' => 'E-posta offert',
  'clone_quote' => 'Kopiera offert',
  'convert_to_invoice' => 'Omvandla till faktura',
  'view_invoice' => 'Visa faktura',
  'view_client' => 'Visa kund',
  'view_quote' => 'Visa offert',

  'updated_quote' => 'Offert uppdaterad',
  'created_quote' => 'Offert skapad',
  'cloned_quote' => 'Offert kopierad',
  'emailed_quote' => 'Offert mailad',
  'archived_quote' => 'Offert arkiverad',
  'archived_quotes' => ':count offerter arkiverade',
  'deleted_quote' => 'Offert borttagen',
  'deleted_quotes' => ':count offerter borttagna',
  'converted_to_invoice' => 'Offert konverterad till faktura',

  'quote_subject' => 'Ny offert från :account',
  'quote_message' => 'Klicka på länken nedan för att visa din offert på :amount.',
  'quote_link_message' => 'Klicka på länken nedan för att visa din offert:',
  'notification_quote_sent_subject' => 'Offert :invoice har skickats till :client',
  'notification_quote_viewed_subject' => 'Offert :invoice har setts av :client',
  'notification_quote_sent' => 'Följande kunder :client har skickats offerten :invoice på :amount.',
  'notification_quote_viewed' => 'Följande kunder :client har sett offerten :invoice på :amount.',

  'session_expired' => 'Din session har avslutats.',

  'invoice_fields' => 'Fakturafält',
  'invoice_options' => 'Fakturainställningar',
  'hide_quantity' => 'Dölj antal',
  'hide_quantity_help' => 'Om antal alltid är 1 så kan du göra fakturan tydligare genom att dölja detta fält.',
  'hide_paid_to_date' => 'Dölj "Betald till"',
  'hide_paid_to_date_help' => 'Visa bara "Betald till"-sektionen på fakturan när en betalning har mottagits.',

  'charge_taxes' => 'Inkludera moms',
  'user_management' => 'Användarhantering',
  'add_user' => 'Lägg till användare',
  'send_invite' => 'Skicka inbjudan',
  'sent_invite' => 'Inbjudan skickad',
  'updated_user' => 'Användare uppdaterad',
  'invitation_message' => 'Du har blivit inbjuden av :invitor. ',
  'register_to_add_user' => 'Registrera dig för att lägga till en användare',
  'user_state' => 'Status',
  'edit_user' => 'Ändra användare',
  'delete_user' => 'Ta bort användare',
  'active' => 'Aktiv',
  'pending' => 'Avvaktar',
  'deleted_user' => 'Användare borttagen',
  'limit_users' => 'Ledsen, men du får skapa max ' . MAX_NUM_USERS . ' användare',

  'confirm_email_invoice' => 'Är du säker på att du vill maila denna fakturan?',
  'confirm_email_quote' => 'Är du säker på att du vill maila denna offerten?',
  'confirm_recurring_email_invoice' => 'Återkommande fakturor är påslaget, är du säker på att du vill maila denna fakturan?',

  'cancel_account' => 'Avsluta konto',
  'cancel_account_message' => 'Varning: Detta kommer att ta bort all din data och går inte att ångra!',
  'go_back' => 'Tillbaka',

  'data_visualizations' => 'Datavisualisering',
  'sample_data' => 'Exempeldata visas',
  'hide' => 'Dölj',
  'new_version_available' => 'En ny version av :releases_link finns tillgänglig. Du kör just nu v:user_version och senaste är v:latest_version',

  'invoice_settings' => 'Fakturainställningar',
  'invoice_number_prefix' => 'Fakturaprefix',
  'invoice_number_counter' => 'Fakturaräknare',
  'quote_number_prefix' => 'Offertprefix',
  'quote_number_counter' => 'Offerträknare',
  'share_invoice_counter' => 'Dela fakturaräknare',
  'invoice_issued_to' => 'Faktura ställd till',
  'invalid_counter' => 'För att undvika nummerkonflikt så bör antingen faktura- eller offertprefix anges',
  'mark_sent' => 'Markering skickad',

  'gateway_help_1' => ':link för att registrera dig på Authorize.net.',
  'gateway_help_2' => ':link för att registrera dig på Authorize.net.',
  'gateway_help_17' => ':link för att hämta din PayPal API-nyckel.',
  'gateway_help_23' => 'Observera: använd din hemliga API-nyckel, inte den publika.',
  'gateway_help_27' => ':link för att registrera dig för TwoCheckout.',

  'more_designs' => 'Fler fakturalayouter',
  'more_designs_title' => 'Fler fakturalayouter',
  'more_designs_cloud_header' => 'Uppgrader till Pro för fler fakturalayouter',
  'more_designs_cloud_text' => '',
  'more_designs_self_host_header' => 'Få ytterliggare 6 fakturalayouter för bara $'.INVOICE_DESIGNS_PRICE,
  'more_designs_self_host_text' => '',
  'buy' => 'Köp',
  'bought_designs' => 'Fler fakturalayouter tillagda',
  'sent' => 'skickat',

  'vat_number' => 'Momsregistreringsnummer',
  'timesheets' => 'Tidrapporter',

  'payment_title' => 'Ange din fakturaadress och betalkortsinformation',
  'payment_cvv' => '*Detta är det 3-4 siffriga nummret på baksidan av kortet',
  'payment_footer1' => '*Fakturaadressen måste stämma överens med adressen kopplad till betalkortet.',
  'payment_footer2' => '*Klicka bara en gång på "BETALA NU" - transaktionen kan ta upp till 1 minut att behandla.',

  'id_number' => 'ID-nummer',
  'white_label_link' => 'White label',
  'white_label_text' => 'Köp en white label licens för $'.WHITE_LABEL_PRICE.' för att ta bort Invoice Ninja loggan från kundernas sidor.',
  'white_label_header' => 'White Label',
  'bought_white_label' => 'White label licens köpt',
  'white_labeled' => 'White labeled',

  'restore' => 'Återställ',
  'restore_invoice' => 'Återställ faktura',
  'restore_quote' => 'Återställ offert',
  'restore_client' => 'Återställ kund',
  'restore_credit' => 'Återställ kreditfaktura',
  'restore_payment' => 'Återställ betalning',

  'restored_invoice' => 'Faktura återställd',
  'restored_quote' => 'Offert återställd',
  'restored_client' => 'Kund återställd',
  'restored_payment' => 'betalning återställd',
  'restored_credit' => 'Kreditfaktura återställd',
  
  'reason_for_canceling' => 'Hjälp oss bli bättre genom att berätta varför du lämnar oss.',
  'discount_percent' => 'Procent',
  'discount_amount' => 'Summa',

  'invoice_history' => 'Fakturahistorik',
  'quote_history' => 'Offerthistorik',
  'current_version' => 'Nuvarande version',
  'select_versiony' => 'Välj version',
  'view_history' => 'Visa historik',

  'edit_payment' => 'Ändra betalning',
  'updated_payment' => 'Betalning uppdaterad',
  'deleted' => 'Ta bort',
  'restore_user' => 'Återställ användare',
  'restored_user' => 'Användare återställd',
  'show_deleted_users' => 'Visa borttagna användare',
  'email_templates' => 'Mail-mallar',
  'invoice_email' => 'Faktura-mail',
  'payment_email' => 'Betalnings-mail',
  'quote_email' => 'Offert-mail',
  'reset_all' => 'Återställ allt',
  'approve' => 'Godkänn',

  'token_billing_type_id' => 'Token fakturering',
  'token_billing_help' => 'Låter dig spara kortinformation i din gateway, och ta betalt vid ett senare tillfälle.',
  'token_billing_1' => 'Avstängd',
  'token_billing_2' => 'Opt-in - Checkbox visas men är inte förvald',
  'token_billing_3' => 'Opt-out - Checkbox visas och är förvald',
  'token_billing_4' => 'alltid',
  'token_billing_checkbox' => 'Spara betalkortsinformation',
  'view_in_stripe' => 'Visa i Stripe',
  'use_card_on_file' => 'Använd kort på fil',
  'edit_payment_details' => 'Ändra betalningsdetaljer',
  'token_billing' => 'Spara kortinformation',
  'token_billing_secure' => 'Data sparas säkert med :stripe_link',

  'support' => 'Support',
  'contact_information' => 'Kontaktinformation',
  '256_encryption' => '256-bitars kryptering',
  'amount_due' => 'Belopp att betala',
  'billing_address' => 'Fakturaadress',
  'billing_method' => 'Faktureringsmetod',
  'order_overview' => 'Orderöversikt',
  'match_address' => '*Adressen måste stämma överens med adressen kopplad till betalkortet.',
  'click_once' => '*Klicka bara en gång på "BETALA NU" - transaktionen kan ta upp till 1 minut att behandla.',

  'default_invoice_footer' => 'Ange som standard <b>faktura sidfot</b>',
  'invoice_footer' => 'Faktura sidfot',
  'save_as_default_footer' => 'Spara som standard sidfot',

  'token_management' => 'Token hantering',
  'tokens' => 'Tokens',
  'add_token' => 'Lägg till token',
  'show_deleted_tokens' => 'Visa borttagna tokens',
  'deleted_token' => 'Token borttagen',
  'created_token' => 'Token skapad',
  'updated_token' => 'Token uppdaterad',
  'edit_token' => 'Ändra token',
  'delete_token' => 'Ta bort token',
  'token' => 'Token',

  'add_gateway' => 'Lägg till gateway',
  'delete_gateway' => 'Ta bort gateway',
  'edit_gateway' => 'Ändra gateway',
  'updated_gateway' => 'Gateway uppdaterad',
  'created_gateway' => 'Gateway skapad',
  'deleted_gateway' => 'Gateway borttagen',
  'pay_with_paypal' => 'PayPal',
  'pay_with_card' => 'Betalkort',

  'change_password' => 'Ändra lösenord',
  'current_password' => 'Nuvarande lösenord',
  'new_password' => 'Nytt lösenord',
  'confirm_password' => 'Bekräfta lösenord',
  'password_error_incorrect' => 'Nuvarande lösenord är felaktigt.',
  'password_error_invalid' => 'Det nya lösenordet är felaktigt.',
  'updated_password' => 'Lösenord uppdaterat',

  'api_tokens' => 'API Tokens',
  'users_and_tokens' => 'Användare och tokens',
  'account_login' => 'Inloggning',
  'recover_password' => 'Återställ ditt lösenord',
  'forgot_password' => 'Glömt ditt lösenord?',
  'email_address' => 'E-postadress',
  'lets_go' => 'Kör på',
  'password_recovery' => 'Återställ lösenord',
  'send_email' => 'Skicka mail',
  'set_password' => 'Ange lösenord',
  'converted' => 'Konvertera',

  'email_approved' => 'Email me when a quote is <b>approved</b>',
  'notification_quote_approved_subject' => 'Quote :invoice was approved by :client',
  'notification_quote_approved' => 'The following client :client approved Quote :invoice for :amount.',
  'resend_confirmation' => 'Resend confirmation email',
  'confirmation_resent' => 'The confirmation email was resent',

  'gateway_help_42' => ':link to sign up for BitPay.<br/>Note: use a Legacy API Key, not an API token.',
  'payment_type_credit_card' => 'Credit card',
  'payment_type_paypal' => 'PayPal',
  'payment_type_bitcoin' => 'Bitcoin',
  'knowledge_base' => 'Knowledge Base',
  'partial' => 'Partial',
  'partial_remaining' => ':partial of :balance',

  'more_fields' => 'More Fields',
  'less_fields' => 'Less Fields',
  'client_name' => 'Client Name',
  'pdf_settings' => 'PDF Settings',
  'product_settings' => 'Product Settings',
  'auto_wrap' => 'Auto Line Wrap',
  'duplicate_post' => 'Warning: the previous page was submitted twice. The second submission had been ignored.',
  'view_documentation' => 'View Documentation',
  'app_title' => 'Free Open-Source Online Invoicing',
  'app_description' => 'Invoice Ninja is a free, open-source solution for invoicing and billing customers. With Invoice Ninja, you can easily build and send beautiful invoices from any device that has access to the web. Your clients can print your invoices, download them as pdf files, and even pay you online from within the system.',
  
  'rows' => 'rows',
  'www' => 'www',
  'logo' => 'Logo',
  'subdomain' => 'Subdomain',
  'provide_name_or_email' => 'Please provide a contact name or email',
  'charts_and_reports' => 'Charts & Reports',
  'chart' => 'Chart',
  'report' => 'Report',
  'group_by' => 'Group by',
  'paid' => 'Paid',
  'enable_report' => 'Report',
  'enable_chart' => 'Chart',
  'totals' => 'Totals',
  'run' => 'Run',
  'export' => 'Export',
  'documentation' => 'Documentation',
  'zapier' => 'Zapier',
  'recurring' => 'Recurring',
  'last_invoice_sent' => 'Last invoice sent :date',

  'processed_updates' => 'Successfully completed update',
  'tasks' => 'Tasks',
  'new_task' => 'New Task',
  'start_time' => 'Start Time',
  'created_task' => 'Successfully created task',
  'updated_task' => 'Successfully updated task',
  'edit_task' => 'Edit Task',
  'archive_task' => 'Archive Task',
  'restore_task' => 'Restore Task',
  'delete_task' => 'Delete Task',
  'stop_task' => 'Stop Task',
  'time' => 'Time',
  'start' => 'Start',
  'stop' => 'Stop',
  'now' => 'Now',
  'timer' => 'Timer',
  'manual' => 'Manual',
  'date_and_time' => 'Date & Time',
  'second' => 'second',
  'seconds' => 'seconds',
  'minute' => 'minute',
  'minutes' => 'minutes',
  'hour' => 'hour',
  'hours' => 'hours',
  'task_details' => 'Task Details',
  'duration' => 'Duration',
  'end_time' => 'End Time',
  'end' => 'End',
  'invoiced' => 'Invoiced',
  'logged' => 'Logged',
  'running' => 'Running',
  'task_error_multiple_clients' => 'The tasks can\'t belong to different clients',
  'task_error_running' => 'Please stop running tasks first',
  'task_error_invoiced' => 'Tasks have already been invoiced',
  'restored_task' => 'Successfully restored task',
  'archived_task' => 'Successfully archived task',
  'archived_tasks' => 'Successfully archived :count tasks',
  'deleted_task' => 'Successfully deleted task',
  'deleted_tasks' => 'Successfully deleted :count tasks',
  'create_task' => 'Create Task',
  'stopped_task' => 'Successfully stopped task',
  'invoice_task' => 'Invoice Task',
  'invoice_labels' => 'Invoice Labels',
  'prefix' => 'Prefix',
  'counter' => 'Counter',

  'payment_type_dwolla' => 'Dwolla',
  'gateway_help_43' => ':link to sign up for Dwolla.',
  'partial_value' => 'Must be greater than zero and less than the total',
  'more_actions' => 'More Actions',  

  'pro_plan_title' => 'NINJA PRO',
  'pro_plan_call_to_action' => 'Upgrade Now!',
  'pro_plan_feature1' => 'Create Unlimited Clients',
  'pro_plan_feature2' => 'Access to 10 Beautiful Invoice Designs',
  'pro_plan_feature3' => 'Custom URLs - "YourBrand.InvoiceNinja.com"',
  'pro_plan_feature4' => 'Remove "Created by Invoice Ninja"',
  'pro_plan_feature5' => 'Multi-user Access & Activity Tracking',
  'pro_plan_feature6' => 'Create Quotes & Pro-forma Invoices',
  'pro_plan_feature7' => 'Customize Invoice Field Titles & Numbering',
  'pro_plan_feature8' => 'Option to Attach PDFs to Client Emails',

  'resume' => 'Resume',
  'break_duration' => 'Break',
  'edit_details' => 'Edit Details',
  'work' => 'Work',
  'timezone_unset' => 'Please :link to set your timezone',
  'click_here' => 'click here',

  'email_receipt' => 'Email payment receipt to the client',
  'created_payment_emailed_client' => 'Successfully created payment and emailed client',
  'add_company' => 'Add Company',
  'untitled' => 'Untitled',
  'new_company' => 'New Company',
  'associated_accounts' => 'Successfully linked accounts',
  'unlinked_account' => 'Successfully unlinked accounts',
  'login' => 'Login',
  'or' => 'or',

  'email_error' => 'There was a problem sending the email',
  'confirm_recurring_timing' => 'Note: emails are sent at the start of the hour.',
  'old_browser' => 'Please use a <a href="'.OUTDATE_BROWSER_URL.'" target="_blank">newer browser</a>',
  'payment_terms_help' => 'Sets the default invoice due date',
  'unlink_account' => 'Unlink Account',
  'unlink' => 'Unlink',
  'show_address' => 'Show Address',
  'show_address_help' => 'Require client to provide their billing address',
  'update_address' => 'Update Address',
  'update_address_help' => 'Update client\'s address with provided details',
  'times' => 'Times',
  'set_now' => 'Set now',
  'dark_mode' => 'Dark Mode',
  'dark_mode_help' => 'Show white text on black background',
  'add_to_invoice' => 'Add to invoice :invoice',
  'create_new_invoice' => 'Create new invoice',
  'task_errors' => 'Please correct any overlapping times',
  'from' => 'From',
  'to' => 'To',
  'font_size' => 'Font Size',
  'primary_color' => 'Primary Color',
  'secondary_color' => 'Secondary Color',
  'customize_design' => 'Customize Design',

  'content' => 'Content',
  'styles' => 'Styles',
  'defaults' => 'Defaults',
  'margins' => 'Margins',
  'header' => 'Header',
  'footer' => 'Footer',
  'custom' => 'Custom',
  'invoice_to' => 'Invoice to',
  'invoice_no' => 'Invoice No.',
  'recent_payments' => 'Recent Payments',
  'outstanding' => 'Outstanding',
  'manage_companies' => 'Manage Companies',
  'total_revenue' => 'Total Revenue',  

  'current_user' => 'Current User',
  'new_recurring_invoice' => 'New Recurring Invoice',
  'recurring_invoice' => 'Recurring Invoice',
  'recurring_too_soon' => 'It\'s too soon to create the next recurring invoice, it\'s scheduled for :date',
  'created_by_invoice' => 'Created by :invoice',
  'primary_user' => 'Primary User',
  'help' => 'Help',
  'customize_help' => '<p>We use <a href="http://pdfmake.org/" target="_blank">pdfmake</a> to define the invoice designs declaratively. The pdfmake <a href="http://pdfmake.org/playground.html" target="_blank">playground</a> provide\'s a great way to see the library in action.</p>
                        <p>You can access any invoice field by adding <code>Value</code> to the end. For example <code>$invoiceNumberValue</code> displays the invoice number.</p>
                        <p>To access a child property using dot notation. For example to show the client name you could use <code>$client.nameValue</code>.</p>
                        <p>If you need help figuring something out post a question to our <a href="https://www.invoiceninja.com/forums/forum/support/" target="_blank">support forum</a>.</p>',

  'invoice_due_date' => 'Due Date',
  'quote_due_date' => 'Valid Until',
  'valid_until' => 'Valid Until',
  'reset_terms' => 'Reset terms',
  'reset_footer' => 'Reset footer',
  'invoices_sent' => ':count invoice sent|:count invoices sent',
  'status_draft' => 'Draft',
  'status_sent' => 'Sent',
  'status_viewed' => 'Viewed',
  'status_partial' => 'Partial',
  'status_paid' => 'Paid',
  'show_line_item_tax' => 'Display <b>line item taxes</b> inline',
  
  'iframe_url' => 'Website',
  'iframe_url_help1' => 'Copy the following code to a page on your site.',
  'iframe_url_help2' => 'You can test the feature by clicking \'View as recipient\' for an invoice.',

  'auto_bill' => 'Auto Bill',
  'military_time' => '24 Hour Time',
  'last_sent' => 'Last Sent',

  'reminder_emails' => 'Reminder Emails',
  'templates_and_reminders' => 'Templates & Reminders',
  'subject' => 'Subject',
  'body' => 'Body',
  'first_reminder' => 'First Reminder',
  'second_reminder' => 'Second Reminder',
  'third_reminder' => 'Third Reminder',
  'num_days_reminder' => 'Days after due date',
  'reminder_subject' => 'Reminder: Invoice :invoice from :account',
  'reset' => 'Reset',
  'invoice_not_found' => 'The requested invoice is not available',

  'referral_program' => 'Referral Program',
  'referral_code' => 'Referral Code',
  'last_sent_on' => 'Last sent on :date',

  'page_expire' => 'This page will expire soon, :click_here to keep working',
  'upcoming_quotes' => 'Upcoming Quotes',
  'expired_quotes' => 'Expired Quotes',

  'sign_up_using' => 'Sign up using',
  'invalid_credentials' => 'These credentials do not match our records',
  'show_all_options' => 'Show all options',
  'user_details' => 'User Details',
  'oneclick_login' => 'One-Click Login',
  'disable' => 'Disable',
  'invoice_quote_number' => 'Invoice and Quote Numbers',
  'invoice_charges' => 'Invoice Charges',

  'invitation_status' => [
    'sent' => 'Email Sent',
    'opened' => 'Email Openend',
    'viewed' => 'Invoice Viewed',
  ],
  'notification_invoice_bounced' => 'We were unable to deliver Invoice :invoice to :contact.',
  'notification_invoice_bounced_subject' => 'Unable to deliver Invoice :invoice',
  'notification_quote_bounced' => 'We were unable to deliver Quote :invoice to :contact.',
  'notification_quote_bounced_subject' => 'Unable to deliver Quote :invoice',

  'custom_invoice_link' => 'Custom Invoice Link',
  'total_invoiced' => 'Total Invoiced',
  'open_balance' => 'Open Balance',
  'verify_email' => 'Please visit the link in the account confirmation email to verify your email address.',
  'basic_settings' => 'Basic Settings',
  'pro' => 'Pro',
  'gateways' => 'Payment Gateways',
  
);
