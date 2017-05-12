# user-social

Adalah modul yang menyediakan table `user_social`. Tabel ini menyimpan informasi
akun sosial user, dan memungkinkan user login melalui akun sosial.

Tabel `user_sosial` di partisi menjadi 50 dengan key `vendor`, yang artinya proses
dengan tabel akan lebih cepat jika dalam kondisi where terdapat field `vendor`.

```php
// Lebih lambat
\UserSocial\Model\UserSocial::get(1);
\UserSocial\Model\UserSocial::get(['vuid'=>'123123123']);

// Lebih cepat
\UserSocial\Model\UserSocial::get(['id'=>1, 'vendor' => 'twitter']);
\UserSocial\Model\UserSocial::get(['vuid'=>'123123123', 'vendor' => 'facebook']);
```

## TODO

1. Fitur user login melalui akun sosial