create database if not exists skeletonSilex character set utf8 collate utf8_unicode_ci;
use skeletonSilex;

grant all privileges on skeletonSilex.* to 'skeletonSilex_user'@'localhost' identified by 'secret';