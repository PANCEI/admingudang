<?= $this->extend('layouts/index'); ?>
<?= $this->section('content'); ?>
<?php var_dump($users, $_SESSION, session('id_user')) ?>
<?= $this->endSection('content'); ?>
<?= $this->section('js'); ?>
<?= $this->endSection('js'); ?>