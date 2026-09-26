<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Bileşenler';
$lang['admin_content'] = 'İçerik';
$lang['admin_database_backup'] = 'Veritabanı Yedeklemeleri';
$lang['admin_extensions'] = 'Eklentiler';
$lang['admin_firewall'] = 'Güvenlik Duvarı';
$lang['admin_help'] = 'Yardım';
$lang['admin_languages'] = 'Diller';
$lang['admin_logs'] = 'Sistem Günlükleri';
$lang['admin_media'] = 'Medya Kütüphanesi';
$lang['admin_modules'] = 'Modüller';
$lang['admin_plugins'] = 'Eklentiler';
$lang['admin_reports'] = 'Etkinlik Günlüğü';
$lang['admin_settings'] = 'Sistem Ayarları';
$lang['admin_sysinfo'] = 'Sistem Bilgileri';
$lang['admin_system'] = 'Sistem';
$lang['admin_system_firewall'] = 'Sistem Güvenlik Duvarı';
$lang['admin_themes'] = 'Temalar';
$lang['admin_updates'] = 'Sistem Güncellemeleri';
$lang['admin_users'] = 'Kullanıcılar';
$lang['admin_view_site'] = 'Siteyi Görüntüle';
$lang['per_page'] = 'Sayfa Başı';

// Generic Messages
$lang['admin_footer_thankyou'] = '<a href="%s" target="_blank">%s</a> ile oluşturduğunuz için teşekkür ederiz.';
$lang['admin_items_active_count'] = '=0{Aktif öğe yok.} other{<b>#</b> / <b>%s</b> öğe aktif.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'Yükleme başarısız oldu: %s';
$lang['admin_install_location_app'] = 'Yalnızca bu uygulama';
$lang['admin_install_location_core'] = 'Tüm uygulamalar';
$lang['admin_install_location_select'] = '&#151; Konum seçin &#151;';
$lang['admin_install_update_confirm'] = 'Bu paketi güncellemek istediğinizden emin misiniz?';
$lang['admin_install_update_error'] = 'Paket güncellenemedi.';
$lang['admin_install_update_skip_confirm'] = 'Bu güncellemeyi atlamak istediğinizden emin misiniz?';
$lang['admin_install_update_skip_error'] = 'Bu güncelleme atlanamadı.';
$lang['admin_install_update_skip_success'] = 'Güncelleme başarıyla atlandı.';
$lang['admin_install_update_success'] = 'Paket başarıyla güncellendi.';
$lang['admin_install_upload_tip'] = 'Bir paketi, <b>.zip</b> dosyasını buraya karşıya yükleyerek yükleyin.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Eski yedek dosyaları temizlenemedi.';
$lang['admin_database_backup_clean_success'] = '%d yedek dosyası silindi. %d disk alanı boşaltıldı.';
$lang['admin_database_backup_create'] = 'Yedek Oluştur';
$lang['admin_database_backup_create_confirm'] = 'Şu anda bir yedekleme yapmak istediğinizden emin misiniz?';
$lang['admin_database_backup_create_error'] = 'Yedek dosyası oluşturulamadı. <b>%s</b> klasörünün yazılabilir olduğundan emin olun.';
$lang['admin_database_backup_create_success'] = 'Veritabanı yedek dosyası <b>%s</b> başarıyla oluşturuldu.';
$lang['admin_database_backup_delete_confirm'] = 'Bu yedekleme dosyalarını silmek istediğinizden emin misiniz?';
$lang['admin_database_backup_delete_error'] = 'Seçilen yedek dosyaları silinemedi.';
$lang['admin_database_backup_delete_success'] = 'Yedek dosyaları başarıyla silindi.';
$lang['admin_database_backup_download_error'] = 'Seçilen yedekleme dosyası indirilemedi.';
$lang['admin_database_backup_download_success'] = 'Yedekleme dosyası başarıyla indirildi.';
$lang['admin_database_backup_lock_confirm'] = 'Bu yedekleme dosyalarını kilitlemek istediğinizden emin misiniz?';
$lang['admin_database_backup_lock_error'] = 'Seçilen yedek dosyaları kilitlenemedi.';
$lang['admin_database_backup_lock_success'] = 'Yedek dosyaları başarıyla kilitlendi.';
$lang['admin_database_backup_locked_error'] = 'Kilitli yedek dosyaları silinemedi.';
$lang['admin_database_backup_missing_error'] = 'Yedek dosyası bulunamadı.';
$lang['admin_database_backup_unlock_confirm'] = 'Bu yedek dosyalarını açmak istediğinize emin misiniz?';
$lang['admin_database_backup_unlock_error'] = 'Seçilen yedekleme dosyalarını açamıyorsunuz.';
$lang['admin_database_backup_unlock_success'] = 'Yedek dosyaları başarıyla kilidi açıldı.';
$lang['admin_database_prune'] = 'Temizle';
$lang['admin_database_prune_confirm'] = 'Veritabanını temizlemek istediğinizden emin misiniz? İşlem sırasında bir yedekleme yapılacaktır.';
$lang['admin_database_prune_error'] = 'Veritabanı temizlenemiyor.';
$lang['admin_database_prune_next'] = 'Sonraki temizlik: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Veritabanı başarıyla temizlendi.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Logları Sil';
$lang['admin_logs_delete_confirm'] = 'Seçilen log dosyalarını silmek istediğinizden emin misiniz?';
$lang['admin_logs_delete_error'] = 'Log dosyaları silinemiyor.';
$lang['admin_logs_delete_success'] = 'Log dosyaları başarıyla silindi.';
$lang['admin_logs_error_disabled'] = 'Loglama şu anda etkin değil.';
$lang['admin_logs_error_empty'] = 'Log bulunamadı.';
$lang['admin_logs_error_missing'] = 'Ya log dosyası bulunamadı ya da boştu.';
$lang['admin_logs_tip'] = 'Loglar hızla çok büyük dosyalar oluşturabilir. Canlı siteler için, eski olanları silmeyi düşünün.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Seçili e-postaları silmek istediğinizden emin misiniz?';
$lang['admin_emails_delete_error'] = 'Seçili e-postalar silinemedi.';
$lang['admin_emails_delete_success'] = 'Seçili e-postalar başarıyla silindi.';
$lang['admin_emails_email_from'] = 'Gönderen';
$lang['admin_emails_mail_queue'] = 'E-posta Kuyruğu';
$lang['admin_emails_mailer'] = 'Toplu E-posta';
$lang['admin_emails_search'] = 'E-postaları konu veya içeriğe göre arayın...';
$lang['admin_emails_send_error'] = 'E-posta kuyruğa eklenemedi. Lütfen tekrar deneyin.';
$lang['admin_emails_send_none'] = 'Seçilen kriterlere uygun kullanıcı bulunamadı.';
$lang['admin_emails_send_success'] = 'E-posta kuyruğa eklendi ve yakında gönderilecek.';
$lang['admin_emails_send_to_banned'] = 'Yasaklı kullanıcılara gönder.';
$lang['admin_emails_send_to_deleted'] = 'Silinen kullanıcılara gönder.';
$lang['admin_emails_send_to_disabled'] = 'Devre dışı kullanıcılara gönder.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Kullanıcı Ekle';
$lang['admin_users_all_users'] = 'Tüm Kullanıcılar';
$lang['admin_users_ban_confirm'] = 'Seçili kullanıcıları yasaklamak istediğinizden emin misiniz?';
$lang['admin_users_ban_error'] = 'Seçili kullanıcılar yasaklanamadı.';
$lang['admin_users_ban_success'] = 'Seçili kullanıcılar başarıyla yasaklandı.';
$lang['admin_users_delete_confirm'] = 'Seçili kullanıcıları silmek istediğinizden emin misiniz?';
$lang['admin_users_delete_error'] = 'Seçili kullanıcılar silinemedi.';
$lang['admin_users_delete_success'] = 'Seçili kullanıcılar başarıyla silindi.';
$lang['admin_users_disable_confirm'] = 'Seçili kullanıcıları devre dışı bırakmak istediğinizden emin misiniz?';
$lang['admin_users_disable_error'] = 'Seçili kullanıcılar devre dışı bırakılamadı.';
$lang['admin_users_disable_success'] = 'Seçili kullanıcılar başarıyla devre dışı bırakıldı.';
$lang['admin_users_edit'] = 'Kullanıcıyı Düzenle';
$lang['admin_users_edit_error'] = 'Kullanıcı güncellenemiyor.';
$lang['admin_users_edit_success'] = 'Kullanıcı başarıyla güncellendi.';
$lang['admin_users_enable_confirm'] = 'Seçili kullanıcıları etkinleştirmek istediğinizden emin misiniz?';
$lang['admin_users_enable_error'] = 'Seçili kullanıcılar etkinleştirilemedi.';
$lang['admin_users_enable_success'] = 'Seçili kullanıcılar başarıyla etkinleştirildi.';
$lang['admin_users_groups'] = 'Gruplar';
$lang['admin_users_lock_confirm'] = 'Seçili kullanıcıları kilitlemek istediğinizden emin misiniz?';
$lang['admin_users_lock_error'] = 'Seçili kullanıcılar kilitlenemedi.';
$lang['admin_users_lock_success'] = 'Seçili kullanıcılar başarıyla kilitlendi.';
$lang['admin_users_logged'] = 'Giriş Yapan Kullanıcılar';
$lang['admin_users_manage'] = 'Kullanıcıları Yönet';
$lang['admin_users_remove_confirm'] = 'Seçili kullanıcıları ve tüm verilerini kalıcı olarak silmek istediğinizden emin misiniz?';
$lang['admin_users_remove_error'] = 'Seçili kullanıcılar ve tüm verileri kalıcı olarak silinemedi.';
$lang['admin_users_remove_success'] = 'Seçili kullanıcılar ve tüm verileri başarıyla silindi.';
$lang['admin_users_restore_confirm'] = 'Seçili kullanıcıları geri yüklemek istediğinizden emin misiniz?';
$lang['admin_users_restore_error'] = 'Seçili kullanıcılar geri yüklenemedi.';
$lang['admin_users_restore_success'] = 'Seçili kullanıcılar başarıyla geri yüklendi.';
$lang['admin_users_search'] = 'Ad veya e-posta ara...';
$lang['admin_users_unban_confirm'] = 'Seçili kullanıcıların yasağını kaldırmak istediğinizden emin misiniz?';
$lang['admin_users_unban_error'] = 'Seçili kullanıcıların yasağı kaldırılamadı.';
$lang['admin_users_unban_success'] = 'Seçili kullanıcıların yasağı başarıyla kaldırıldı.';
$lang['admin_users_unlock_confirm'] = 'Seçili kullanıcıların kilidini açmak istediğinizden emin misiniz?';
$lang['admin_users_unlock_error'] = 'Seçili kullanıcıların kilidi açılamadı.';
$lang['admin_users_unlock_success'] = 'Seçili kullanıcıların kilidi başarıyla açıldı.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Günlükleri Temizle';
$lang['admin_reports_clear_confirm'] = 'İşlem günlüğünü temizlemek istediğinizden emin misiniz?';
$lang['admin_reports_clear_error'] = 'İşlem günlüğü temizlenemedi.';
$lang['admin_reports_clear_success'] = 'İşlem günlüğü başarıyla temizlendi.';
$lang['admin_reports_latest_actions'] = 'Son İşlemler';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Seçilen dosyaları silmek istediğinizden emin misiniz?';
$lang['admin_media_delete_error'] = 'Dosyalar silinemiyor.';
$lang['admin_media_delete_success'] = 'Dosyalar başarıyla silindi.';
$lang['admin_media_file_delete_error'] = 'Dosya silinemiyor.';
$lang['admin_media_file_delete_success'] = 'Dosya başarıyla silindi.';
$lang['admin_media_file_update_error'] = 'Dosya güncellenemiyor.';
$lang['admin_media_file_update_success'] = 'Dosya başarıyla güncellendi.';
$lang['admin_media_search'] = 'Ad, açıklama veya dosya adına göre ara...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Aktif modül yok.} other{<b>#</b> / <b>%s</b> modül aktif.}';
$lang['admin_modules_add'] = 'Modül Ekle';
$lang['admin_modules_delete_confirm'] = 'Modülü silmek istediğinizden emin misiniz: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Modül silinemiyor.';
$lang['admin_modules_delete_error_active'] = 'Etkin modüller silinemez.';
$lang['admin_modules_delete_success'] = 'Modül başarıyla silindi.';
$lang['admin_modules_disable_all_confirm'] = 'Tüm modülleri devre dışı bırakmak istediğinizden emin misiniz?';
$lang['admin_modules_disable_all_error'] = 'Tüm modüller devre dışı bırakılamadı.';
$lang['admin_modules_disable_all_success'] = 'Tüm modüller başarıyla devre dışı bırakıldı.';
$lang['admin_modules_disable_confirm'] = 'Modülü devre dışı bırakmak istediğinizden emin misiniz: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Modül devre dışı bırakılamıyor.';
$lang['admin_modules_disable_success'] = 'Modül başarıyla devre dışı bırakıldı.';
$lang['admin_modules_enable_all_confirm'] = 'Tüm modülleri etkinleştirmek istediğinizden emin misiniz?';
$lang['admin_modules_enable_all_error'] = 'Tüm modüller etkinleştirilemedi.';
$lang['admin_modules_enable_all_success'] = 'Tüm modüller başarıyla etkinleştirildi.';
$lang['admin_modules_enable_confirm'] = 'Modülü etkinleştirmek istediğinizden emin misiniz: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Modül etkinleştirilemedi.';
$lang['admin_modules_enable_success'] = 'Modül başarıyla etkinleştirildi.';
$lang['admin_modules_global'] = 'Genel modül (paylaşılan)';
$lang['admin_modules_install_confirm'] = 'modülünü yüklemek istediğinizden emin misiniz: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'Modül yüklenemedi.';
$lang['admin_modules_install_success'] = 'Modül başarıyla yüklendi.';
$lang['admin_modules_install_tip'] = 'Modüller sitenize yeni özellikler ve işlevler ekler. <a href="%s" target="_blank" rel="noopener">Modül dizininden</a> mevcut modülleri inceleyin veya bir <b>.zip</b> dosyası yükleyin.';
$lang['admin_modules_update_confirm'] = 'Bu modülü güncellemek istediğinizden emin misiniz?';
$lang['admin_modules_update_error'] = 'Modül güncellenemedi.';
$lang['admin_modules_update_success'] = 'Modül başarıyla güncellendi.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Aktif eklenti yok.} other{<b>#</b> / <b>%s</b> eklenti aktif.}';
$lang['admin_plugins_add'] = 'Eklenti Ekle';
$lang['admin_plugins_delete_confirm'] = '<b>%s</b> eklentisini silmek istediğinizden emin misiniz?';
$lang['admin_plugins_delete_error'] = 'Eklenti silinemedi.';
$lang['admin_plugins_delete_error_active'] = 'Etkin eklentiler silinemez.';
$lang['admin_plugins_delete_success'] = 'Eklenti başarıyla silindi.';
$lang['admin_plugins_disable_all_confirm'] = 'Tüm eklentileri devre dışı bırakmak istediğinizden emin misiniz?';
$lang['admin_plugins_disable_all_error'] = 'Tüm eklentiler devre dışı bırakılamadı.';
$lang['admin_plugins_disable_all_success'] = 'Tüm eklentiler başarıyla devre dışı bırakıldı.';
$lang['admin_plugins_disable_confirm'] = '<b>%s</b> eklentisini devre dışı bırakmak istediğinizden emin misiniz?';
$lang['admin_plugins_disable_error'] = 'Eklenti devre dışı bırakılamadı.';
$lang['admin_plugins_disable_success'] = 'Eklenti başarıyla devre dışı bırakıldı.';
$lang['admin_plugins_enable_all_confirm'] = 'Tüm eklentileri etkinleştirmek istediğinizden emin misiniz?';
$lang['admin_plugins_enable_all_error'] = 'Tüm eklentiler etkinleştirilemedi.';
$lang['admin_plugins_enable_all_success'] = 'Tüm eklentiler başarıyla etkinleştirildi.';
$lang['admin_plugins_enable_confirm'] = '<b>%s</b> eklentisini etkinleştirmek istediğinizden emin misiniz?';
$lang['admin_plugins_enable_error'] = 'Eklenti etkinleştirilemedi.';
$lang['admin_plugins_enable_success'] = 'Eklenti başarıyla etkinleştirildi.';
$lang['admin_plugins_global'] = 'Genel eklenti (paylaşılan)';
$lang['admin_plugins_install_confirm'] = 'eklentisini yüklemek istediğinizden emin misiniz: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'Eklenti yüklenemedi.';
$lang['admin_plugins_install_success'] = 'Eklenti başarıyla yüklendi.';
$lang['admin_plugins_install_tip'] = 'Eklentiler mevcut özellikleri ek seçenekler veya entegrasyonlarla genişletir. <a href="%s" target="_blank" rel="noopener">Eklenti dizininden</a> yükleyin veya bir <b>.zip</b> dosyası yükleyin.';
$lang['admin_plugins_update_confirm'] = 'Bu eklentiyi güncellemek istediğinizden emin misiniz?';
$lang['admin_plugins_update_error'] = 'Eklenti güncellenemedi.';
$lang['admin_plugins_update_success'] = 'Eklenti başarıyla güncellendi.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Tema Ekle';
$lang['admin_themes_delete_confirm'] = 'Temayı silmek istediğinizden emin misiniz: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Tema silinemiyor.';
$lang['admin_themes_delete_error_active'] = 'Mevcut aktif temayı silemezsiniz.';
$lang['admin_themes_delete_success'] = 'Tema başarıyla silindi.';
$lang['admin_themes_disable_confirm'] = 'Temayı devre dışı bırakmak istediğinizden emin misiniz: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Tema devre dışı bırakılamadı.';
$lang['admin_themes_disable_error_active'] = 'Etkin tema devre dışı bırakılamaz.';
$lang['admin_themes_disable_success'] = 'Tema başarıyla devre dışı bırakıldı.';
$lang['admin_themes_enable_confirm'] = 'Temayı etkinleştirmek istediğinizden emin misiniz: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Tema etkinleştirilemedi.';
$lang['admin_themes_enable_success'] = 'Tema başarıyla etkinleştirildi.';
$lang['admin_themes_install_confirm'] = 'temasını yüklemek istediğinizden emin misiniz: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'Tema yüklenemedi.';
$lang['admin_themes_install_success'] = 'Tema başarıyla yüklendi.';
$lang['admin_themes_install_tip'] = 'Temalar sitenizin görünümünü ve düzenini değiştirir. <a href="%s" target="_blank" rel="noopener">Tema kütüphanesinden</a> seçim yapın veya kendi temanızı yüklemek için bir <b>.zip</b> dosyası yükleyin.';
$lang['admin_themes_none_tip'] = 'Bu uygulama tema olmadan çalışıyor. Herkese açık arayüzü özelleştirmek için bir tema yükleyin.';
$lang['admin_themes_update_confirm'] = 'Bu temayı güncellemek istediğinizden emin misiniz?';
$lang['admin_themes_update_error'] = 'Tema güncellenemedi.';
$lang['admin_themes_update_success'] = 'Tema başarıyla güncellendi.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menüler';
$lang['admin_menus_assign_error'] = 'Menü konumları güncellenemedi.';
$lang['admin_menus_assign_success'] = 'Menü konumları başarıyla güncellendi.';
$lang['admin_menus_header'] = 'Kullanılabilir <b>%s</b> menü konumu var.';
$lang['admin_menus_location'] = 'Konum';
$lang['admin_menus_locations'] = 'Menü Konumları';
$lang['admin_menus_manage'] = 'Menüleri Yönet';
$lang['admin_menus_menu'] = 'Atanan Menü';
$lang['admin_menus_none'] = '&#151; Yok &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Dil Ekle';
$lang['admin_languages_default_confirm'] = 'Bu dili sitenizin varsayılan dili yapmak istediğinizden emin misiniz?';
$lang['admin_languages_default_error'] = 'Varsayılan dil değiştirilemiyor.';
$lang['admin_languages_default_error_nochange'] = 'Bu dil zaten varsayılan dildir.';
$lang['admin_languages_default_success'] = 'Varsayılan dil başarıyla değiştirildi.';
$lang['admin_languages_delete_confirm'] = 'Şu dili silmek istediğinizden emin misiniz: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'Dil silinemedi.';
$lang['admin_languages_delete_error_active'] = 'Etkin diller silinemez.';
$lang['admin_languages_delete_error_default'] = 'Varsayılan dil silinemez.';
$lang['admin_languages_delete_success'] = 'Dil başarıyla silindi.';
$lang['admin_languages_disable_all_confirm'] = 'Tüm dilleri devre dışı bırakmak istediğinizden emin misiniz?';
$lang['admin_languages_disable_all_error'] = 'Tüm diller devre dışı bırakılamadı.';
$lang['admin_languages_disable_all_success'] = 'Tüm diller başarıyla devre dışı bırakıldı.';
$lang['admin_languages_disable_confirm'] = 'Dili devre dışı bırakmak istediğinizden emin misiniz: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Dil devre dışı bırakılamıyor.';
$lang['admin_languages_disable_error_default'] = 'Varsayılan dil devre dışı bırakılamaz.';
$lang['admin_languages_disable_error_nochange'] = 'Bu dil zaten devre dışıdır.';
$lang['admin_languages_disable_success'] = 'Dil başarıyla devre dışı bırakıldı.';
$lang['admin_languages_enable_all_confirm'] = 'Tüm dilleri etkinleştirmek istediğinizden emin misiniz?';
$lang['admin_languages_enable_all_error'] = 'Tüm diller etkinleştirilemedi.';
$lang['admin_languages_enable_all_success'] = 'Tüm diller başarıyla etkinleştirildi.';
$lang['admin_languages_enable_confirm'] = 'Dili etkinleştirmek istediğinizden emin misiniz: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Dil etkinleştirilemedi.';
$lang['admin_languages_enable_error_nochange'] = 'Bu dil zaten etkinleştirilmiştir.';
$lang['admin_languages_enable_success'] = 'Dil başarıyla etkinleştirildi.';
$lang['admin_languages_install_confirm'] = 'dilini yüklemek istediğinizden emin misiniz: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'Dil yüklenemedi.';
$lang['admin_languages_install_success'] = 'Dil başarıyla yüklendi.';
$lang['admin_languages_install_tip'] = 'Diller, sitenizin arayüzü ve içeriği için çeviriler ekler. Kullanılabilir dilleri <a href="%s" target="_blank" rel="noopener">dil dizininde</a> inceleyin veya kendi dilinizi yüklemek için bir <b>.zip</b> paketi karşıya yükleyin.';
$lang['admin_languages_tip'] = 'Siteyi ziyaret edenler için etkinleştirilen diller kullanılabilir. Varsayılan dil ve dillerin durumu ayarlanabilir.';
$lang['admin_languages_update_confirm'] = 'Bu dili güncellemek istediğinizden emin misiniz?';
$lang['admin_languages_update_error'] = 'Dil güncellenemedi.';
$lang['admin_languages_update_success'] = 'Dil başarıyla güncellendi.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Paket zaten mevcut.';
$lang['package_archive_download_failed'] = 'Paket arşivi indirilemedi.';
$lang['package_backup_create_error'] = 'Paket yedeği oluşturulamadı.';
$lang['package_backup_dir_failed'] = 'Yedekleme dizini oluşturulamadı: %s';
$lang['package_backup_missing'] = 'Yedek dosyası mevcut değil.';
$lang['package_backup_path_error'] = 'Yedek dosyasının yolu çözümlenemedi.';
$lang['package_backup_request_invalid'] = 'Geçersiz yedekleme isteği.';
$lang['package_backup_restore_error'] = 'Paket yedeği geri yüklenemedi.';
$lang['package_catalog_type_unknown'] = 'Bilinmeyen katalog türü.';
$lang['package_checksum_error'] = 'Paket sağlama toplamı (checksum) doğrulaması başarısız oldu.';
$lang['package_copy_files_error'] = 'Paket dosyaları hedef dizine kopyalanamadı.';
$lang['package_copy_updates_error'] = 'Güncelleme dosyaları hedef dizine kopyalanamadı.';
$lang['package_dest_dir_failed'] = 'Hedef dizin oluşturulamadı: %s';
$lang['package_destination_error'] = 'Paket hedefi çözümlenemedi.';
$lang['package_download_dir_failed'] = 'İndirme dizini oluşturulamadı: %s';
$lang['package_download_empty'] = 'Paket indirme işlemi boş bir yanıt döndürdü.';
$lang['package_download_request_invalid'] = 'Geçersiz paket indirme isteği.';
$lang['package_extract_failed'] = 'ZIP arşivi çıkarılamadı: %s';
$lang['package_invalid_lang_files'] = 'Geçersiz dil — gerekli uygulama dil dosyaları eksik.';
$lang['package_invalid_lang_structure'] = 'Geçersiz dil — admin ve/atau ci3 dizinleri eksik.';
$lang['package_invalid_missing_info'] = 'Geçersiz %s: "info.php" eksik.';
$lang['package_invalid_module_structure'] = 'Geçersiz modül — gerekli config ve/veya controllers dizinleri eksik.';
$lang['package_invalid_plugin_boot'] = 'Geçersiz eklenti (plugin) — "boot.php" eksik.';
$lang['package_invalid_plugin_contents'] = 'Geçersiz eklenti (plugin) — eklentiler denetleyici (controller) veya görünüm (view) içeremez.';
$lang['package_invalid_theme_boot'] = 'Geçersiz tema — "boot.php" eksik.';
$lang['package_invalid_theme_views'] = 'Geçersiz tema — views dizini eksik.';
$lang['package_no_root_dir'] = 'Paket bir kök dizin (root directory) içermiyor.';
$lang['package_not_downloadable'] = 'Paket halka açık olarak indirilemez.';
$lang['package_not_in_registry'] = 'Paket, genel kayıt defterinde (registry) mevcut değil.';
$lang['package_request_invalid'] = 'Geçersiz paket isteği.';
$lang['package_rollback_request_invalid'] = 'Geçersiz geri alma (rollback) isteği.';
$lang['package_root_mismatch'] = 'Paket arşivi kök dizini %s ile eşleşmiyor';
$lang['package_single_root_required'] = 'Paket tam olarak bir kök dizin içermelidir.';
$lang['package_source_error'] = 'Paket kaynağı çözümlenemedi.';
$lang['package_system_core_restricted'] = 'Sistem bileşenleri paket olarak yüklenemez.';
$lang['package_temp_dir_failed'] = 'Geçici dizin oluşturulamadı: %s';
$lang['package_type_unknown'] = 'Bilinmeyen paket türü.';
$lang['package_update_request_invalid'] = 'Geçersiz paket güncelleme isteği.';
$lang['package_update_root_mismatch'] = 'Güncelleme arşivi kök dizini %s ile eşleşmiyor.';
$lang['package_upload_dir_failed'] = 'Yükleme dizini oluşturulamadı: %s';
$lang['package_url_invalid'] = 'Geçersiz paket dağıtım URL\'si.';
$lang['package_write_failed'] = 'Paket şuraya yazılamadı: %s';
$lang['package_zip_not_found'] = 'Paket ZIP dosyası mevcut değil: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Yeni güncellemeler mevcut!';
$lang['update_backup_error'] = 'Mevcut paketin yedeği oluşturulamadı. Güncelleme iptal edildi.';
$lang['update_check_disabled'] = 'Otomatik güncelleme kontrolleri devre dışı. Güncellemeleri görmek için etkinleştirin.';
$lang['update_check_error'] = 'Şu anda güncelleme kontrolü çalıştırılamıyor.';
$lang['update_check_success'] = 'Güncelleme kontrolü başarıyla tamamlandı.';
$lang['update_install_error'] = 'Paket yüklenemedi. Önceki sürüm korundu.';
$lang['update_install_success'] = 'Paket başarıyla en son sürüme güncellendi.';
$lang['update_interval_3days'] = 'Her 3 günde bir';
$lang['update_interval_biweekly'] = 'Her 2 haftada bir';
$lang['update_interval_daily'] = 'Her gün';
$lang['update_interval_monthly'] = 'Ayda bir kez';
$lang['update_interval_weekly'] = 'Haftada bir kez';
$lang['update_not_available'] = 'Web siteniz güncel.';
$lang['update_rollback_confirm'] = 'Önceki sürümü geri yüklemek istediğinizden emin misiniz?';
$lang['update_rollback_error'] = 'Önceki sürüm geri yüklenemedi. Manuel müdahale gerekebilir.';
$lang['update_rollback_success'] = 'Önceki sürüm başarıyla geri yüklendi.';
$lang['updates_available'] = 'Mevcut güncellemeler';
$lang['updates_check_now'] = 'Şimdi kontrol et';
$lang['updates_check_now_confirm'] = 'Şimdi güncellemeleri kontrol etmek istediğinizden emin misiniz?';
$lang['updates_current_version'] = 'Mevcut sürüm';
$lang['updates_enable'] = 'Güncellemeleri etkinleştir';
$lang['updates_last_check'] = 'Son kontrol: %s';
$lang['updates_latest_version'] = 'En son sürüm';
$lang['updates_next_check'] = 'Bir sonraki planlanmış kontrol: %s';
$lang['updates_previous_version'] = 'Önceki sürüm';
$lang['updates_recent'] = 'Son güncellenen';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Belirtilen IP adresi engellenemedi.';
$lang['admin_firewall_ban_success'] = 'IP adresi başarıyla engellendi.';
$lang['admin_firewall_block_ip'] = 'IP adresini engelle';
$lang['admin_firewall_delete_confirm'] = 'Seçili IP adreslerinin engelini kaldırmak istediğinizden emin misiniz?';
$lang['admin_firewall_delete_error'] = 'Seçili IP adreslerinin engeli kaldırılamadı.';
$lang['admin_firewall_delete_success'] = 'Seçili IP adreslerinin engeli başarıyla kaldırıldı.';
$lang['admin_firewall_duration'] = 'Engelleme süresi';
$lang['admin_firewall_permanent'] = 'Kalıcı';
$lang['admin_firewall_reason'] = 'Engelleme nedeni';
$lang['admin_firewall_tip'] = 'Tekrarlanan ihlaller veya şüpheli aktivite nedeniyle güvenlik duvarı tarafından engellenen IP adreslerini görüntüleyin ve yönetin.';

// Settings
$lang['404_ban_duration'] = '404 Yasak Süresi';
$lang['404_threshold'] = '404 Sınır';
$lang['uri_ban_duration'] = 'URI Yasak Süresi';
$lang['uri_strike_threshold'] = 'URI Sınır Aşımı Sınırı';
