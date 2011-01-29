<?php
R('')->controller('test')->action('index')->on('GET');
// Admin related routes
R('admin')->controller('admin')->action('index')->on('GET');
R('admin/settings')->controller('admin')->action('settings')->on('GET');
R('admin/login')->controller('admin')->action('login')->on('GET');
R('admin/logout')->controller('admin')->action('logout')->on('GET');
R('admin/active')->controller('admin')->action('activeposts')->on('GET');

// POST ONLY
R('admin/dologin')->controller('admin')->action('dologin')->on('POST');
R('gbook/deletepost')->controller('gbook')->action('deletepost')->on('POST');
R('gbook/approvepost')->controller('gbook')->action('approvepost')->on('POST');

// Guestbook public routes
// POST ONLY
R('gbook/newpost')->controller('gbook')->action('newpost')->on('POST');
?>