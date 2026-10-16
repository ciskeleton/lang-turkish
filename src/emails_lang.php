<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Sistem güncellemeleri mevcut';
$lang['emails_updates_available_message'] = <<<EOT
Merhaba,

{site_anchor} için yeni sistem güncellemeleri tespit edildi.

Bu güncellemeler güvenlik düzeltmeleri, performans iyileştirmeleri veya yeni özellikler içerebilir.
Bunları mümkün olan en kısa sürede incelemenizi öneririz.

Yönetici panosundan mevcut güncellemeleri inceleyebilir ve yönetebilirsiniz:
{link}

Güncellemeleri zaten incelediyseniz veya uyguladıysanız, başka bir işlem yapmanız gerekmez.

Bu, {site_name} tarafından gönderilen otomatik bir sistem mesajıdır.
Lütfen bu e-postaya cevap vermeyin.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Hesap etkinleştirme';
$lang['emails_account_activation_request_message'] = <<<EOT
Merhaba {name},

{site_anchor} sitesine kaydolduğunuz için teşekkür ederiz. Hesabınız oluşturuldu ve kullanmadan önce etkinleştirilmesi gerekiyor.

Hesabınızı etkinleştirmek için aşağıdaki bağlantıya tıklayın veya tarayıcınıza yapıştırın:
{link}

Saygılarımızla,
-- {site_name} Ekibi.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Yeni etkinleştirme bağlantısı';
$lang['emails_account_activation_resend_message'] = <<<EOT
Merhaba {name},

Hesabınız aktif olmadığı için {site_anchor} üzerinde yeni bir etkinleştirme bağlantısı talep ettiniz.
Hesabınızı etkinleştirmek için aşağıdaki bağlantıya tıklayın veya tarayıcınıza yapıştırın:
{link}

Eğer bu talebi siz yapmadıysanız, başka bir işlem yapmanıza gerek yoktur.

Bu işlem şu IP adresinden talep edildi: {ip_link}.

Saygılarımızla,
-- {site_name} Ekibi.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Hesap etkinleştirildi';
$lang['emails_account_activation_success_message'] = <<<EOT
Merhaba {name},

{site_anchor} üzerindeki hesabınız başarıyla etkinleştirildi. Artık istediğiniz zaman <a href="{login_url}" target="_blank" rel="noopener">giriş yapabilirsiniz</a>.

Keyifli vakit geçirmenizi umar, saygılarımızı sunarız.

-- {site_name} Ekibi.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Hesap onay bekliyor';
$lang['emails_account_approval_pending_message'] = <<<EOT
Merhaba {name},

{site_anchor}'a katıldığınız için teşekkür ederiz. Hesabınız oluşturuldu, ancak aktif hale gelmesi için site yöneticisi tarafından onaylanması gerekiyor.
Bu önemli adım için içtenlikle özür dileriz, ancak bu yalnızca güvenlik amaçlıdır.

Hesabınız onaylandığında size bir onay e-postası gönderilecektir.

Umarız burada keyifli vakit geçirirsiniz, lütfen saygılarımızı kabul edin.

-- {site_name} Ekibi.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Hesap onaylandı';
$lang['emails_account_approval_success_message'] = <<<EOT
Merhaba {name},

Harika haber! {site_anchor} üzerindeki hesabınız onaylandı.

Artık giriş yapabilir ve hesabınızı hemen kullanmaya başlayabilirsiniz:
{link}

Aramızda olduğunuz için mutluyuz.

-- {site_name} Ekibi
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Hesap geri yüklendi';
$lang['emails_account_restored_message'] = <<<EOT
Merhaba {name},

Bu e-posta, {site_anchor} üzerindeki hesabınızın başarıyla geri yüklendiğini onaylar.

Tekrar hoş geldiniz! Umarız bu sefer keyifli vakit geçirirsiniz.

Saygılarımızla,
-- {site_name} Ekibi.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = '{site_name} sitesine hoş geldiniz';
$lang['emails_account_welcome_message'] = <<<EOT
Merhaba {name},

Çoğu web sitesi, kaydolduktan sonra uzun bir hoş geldiniz e-posta dizisi gönderir.

İyi haber: biz çoğu insan gibi değiliz.
Yine de sizi ağırlamak ve {site_anchor}'a katıldığınız için teşekkür etmek istiyoruz.

Umarız keyifli bir deneyim yaşarsınız. Saygılarımızı kabul edin lütfen.

-- {site_name} Ekibi.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'E-posta değişiklik talebi';
$lang['emails_email_change_request_message'] = <<<EOT
Merhaba {name},

Bu e-postayı, {site_anchor} hesabınız için bir e-posta değişikliği talebi aldığımız için alıyorsunuz.

Devam etmek istiyorsanız, aşağıdaki bağlantıya tıklayın veya tarayıcınıza yapıştırın:
{link}

Eğer e-posta değişikliği talep etmediyseniz, herhangi bir işlem yapmanıza gerek yoktur.

Bu işlem şu IP adresinden talep edildi: {ip_link}.

Saygılarımızla,
-- {site_name} Ekibi.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'E-posta adresi değiştirildi';
$lang['emails_email_change_success_message'] = <<<EOT
Merhaba {name},

Bu e-posta, {site_anchor} üzerinde kullandığınız e-posta adresinizin başarıyla değiştirildiğini onaylar.

Eğer bu işlemi siz yapmadıysanız, lütfen sorunu çözmek için en kısa sürede bizimle iletişime geçin.

Bu işlem şu IP adresinden gerçekleştirildi: {ip_link}.

Saygılarımızla,
-- {site_name} Ekibi.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Başarısız giriş uyarısı';
$lang['emails_login_alert_failure_message'] = <<<EOT
Merhaba {name},

Birisi yakın zamanda yanlış şifreler kullanarak {site_name} hesabınıza giriş yapmaya çalıştı.

Sunucu Tarihi: {date}
Cihaz: {browser}, {platform}
IP Adresi: {ip_link}

Bu siz değilseniz endişelenmeyin, giriş denemesi başarısız oldu.

Bu sizseniz ve şifrenizi hatırlamıyorsanız, şifreyi sıfırlamak için aşağıdaki bağlantıya tıklayın:
{reset_link}

Hesabınıza giriş yapmakta sorun yaşıyorsanız, ekibimizle iletişime geçin veya tek tıklamayla giriş bağlantısı talep edin.

-- {site_name} Ekibi.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Başarılı giriş bildirimi';
$lang['emails_login_alert_success_message'] = <<<EOT
Merhaba {name},

{site_name} hesabınıza başarılı bir şekilde giriş yaptıktan sonra size bu e-postayı gönderiyoruz.

Sunucu Tarihi: {date}
Cihaz: {browser}, {platform}
IP Adresi: {ip_link}

Eğer bu sizseniz, bu e-postayı güvenle göz ardı edebilirsiniz.

Eğer bu siz değilseniz, hesabınızı korumak için hemen şifrenizi değiştirin.

Her türlü destek için, destek ekibimizle iletişime geçin.

-- {site_name} Ekibi
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Hızlı giriş bağlantısı';
$lang['emails_login_magic_link_message'] = <<<EOT
Merhaba {name},

{site_anchor} üzerindeki hesabınıza tek tıklamayla giriş yapmak istediniz.

Aşağıdaki bağlantıya tıklayın veya tarayıcınıza yapıştırarak anında giriş yapın:
{link}

Bu bağlantı 15 dakika içinde geçerliliğini yitirecektir. Bu talebi siz yapmadıysanız, lütfen bu e-postayı dikkate almayın.

Bu talep şu IP adresinden yapıldı: {ip_link}.

Saygılarımızla,
-- {site_name} Ekibi.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'İki adımlı doğrulama';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Merhaba {name},

İki faktörlü kimlik doğrulama kodunuz: <strong>{code}</strong>

Hesap ayarlarınızdan iki faktörlü kimlik doğrulamayı her zaman devre dışı bırakabilirsiniz.

Bu işlem şu IP adresinden gerçekleştirildi: {ip_link}.

Saygılarımızla,
-- {site_name} Ekibi.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Parola sıfırlama talebi';
$lang['emails_password_change_request_message'] = <<<EOT
Merhaba {name},

Bu e-postayı, {site_anchor} hesabınız için bir şifre sıfırlama talebi aldığımız için alıyorsunuz.

Devam etmek istiyorsanız, aşağıdaki bağlantıya tıklayın veya tarayıcınıza yapıştırın:
{link}

Eğer şifre sıfırlama talebinde bulunmadıysanız, herhangi bir işlem yapmanıza gerek yoktur.

Bu talep şu IP adresinden yapıldı: {ip_link}.

Saygılarımızla,
-- {site_name} Ekibi.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Parola başarıyla değiştirildi';
$lang['emails_password_change_success_message'] = <<<EOT
Merhaba {name},

Bu e-posta, {site_anchor}'daki şifrenizin başarıyla değiştirildiğini onaylar. Artık <a href="{login_url}" target="_blank" rel="noopener">yeni şifrenizle giriş yapabilirsiniz</a>.

Eğer bu işlemi siz gerçekleştirmediyseniz, lütfen sorunu çözmek için en kısa sürede bizimle iletişime geçin.

Bu işlem şu IP adresinden gerçekleştirildi: {ip_link}.

Saygılarımızla,
-- {site_name} Ekibi.
EOT;
