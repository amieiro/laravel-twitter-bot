<?php

use Illuminate\Database\Seeder;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweets')->insert([
            'prefix' => 'Puedes descargar la máquina virtual',
            'body' => 'Antergos Escritorio (Gnome) 17.10 en https://descargarmaquinasvirtuales.com/distribuciones/antergos/',
        ]);
        DB::table('tweets')->insert([
            'prefix' => 'Disponible una máquina virtual',
            'body' => 'CentOS Escritorio (Gnome) 7 en https://descargarmaquinasvirtuales.com/distribuciones/centos/',
        ]);
        DB::table('tweets')->insert([
            'prefix' => 'Descarga una máquina virtual gratuita de',
            'body' => 'CentOS Servidor 7 en https://descargarmaquinasvirtuales.com/distribuciones/centos/',
        ]);
        DB::table('tweets')->insert([
            'prefix' => 'Máquina virtual en formato OVA',
            'body' => 'Debian Escritorio (Gnome) 9.2.1 en https://descargarmaquinasvirtuales.com/distribuciones/debian/',
        ]);
        DB::table('tweets')->insert([
            'prefix' => 'Máquina virtual en formato OVA',
            'body' => 'Debian Servidor 9.2.1 en https://descargarmaquinasvirtuales.com/distribuciones/debian/',
        ]);
        DB::table('tweets')->insert([
            'prefix' => 'Máquina virtual para VirtualBox',
            'body' => 'deepin Escritorio (DDE) 15.4.1 en https://descargarmaquinasvirtuales.com/distribuciones/deepin/',
        ]);
        DB::table('tweets')->insert([
            'prefix' => 'Máquina virtual para VMware',
            'body' => 'elementary OS Escritorio (Pantheon) 0.4.1 en https://descargarmaquinasvirtuales.com/distribuciones/elementary-os/',
        ]);
        DB::table('tweets')->insert([
            'prefix' => 'Máquina virtual para VirtualBox o VMware',
            'body' => 'Fedora Escritorio (Gnome) 26-1.5 en https://descargarmaquinasvirtuales.com/distribuciones/fedora/',
        ]);
        DB::table('tweets')->insert([
            'body' => 'Kali Escritorio (Gnome) 2017.2 en https://descargarmaquinasvirtuales.com/distribuciones/kali-linux/',
        ]);
        DB::table('tweets')->insert([
            'body' => 'Lite Escritorio (Xfce) 3.6 en https://descargarmaquinasvirtuales.com/distribuciones/linux-lite/',
        ]);
        DB::table('tweets')->insert([
            'body' => 'Manjaro Escritorio (Xfce) 17.0.4 en https://descargarmaquinasvirtuales.com/distribuciones/manjaro/',
        ]);
        DB::table('tweets')->insert([
            'body' => 'Mint Escritorio (Cinnamon) 18.2 en https://descargarmaquinasvirtuales.com/distribuciones/linux-mint/',
        ]);
        DB::table('tweets')->insert([
            'body' => 'openSUSE Escritorio (Kde) 42.3 en https://descargarmaquinasvirtuales.com/distribuciones/opensuse/',
        ]);
        DB::table('tweets')->insert([
            'body' => 'PCLinuxOS Escritorio (Mate) 2017.07 en https://descargarmaquinasvirtuales.com/distribuciones/pclinuxos/',
        ]);
        DB::table('tweets')->insert([
            'body' => 'ReactOS Escritorio 0.4.6 en https://descargarmaquinasvirtuales.com/distribuciones/reactos/',
        ]);
        DB::table('tweets')->insert([
            'body' => 'Solus Escritorio (Budgie) 3 en https://descargarmaquinasvirtuales.com/distribuciones/solus/',
        ]);
        DB::table('tweets')->insert([
            'body' => 'Ubuntu Escritorio (Gnome) 17.10 en https://descargarmaquinasvirtuales.com/distribuciones/ubuntu/',
        ]);
        DB::table('tweets')->insert([
            'body' => 'Ubuntu Servidor 17.10 en https://descargarmaquinasvirtuales.com/distribuciones/ubuntu/',
        ]);
        DB::table('tweets')->insert([
            'body' => 'Zorin OS Escritorio (Gnome) 12.2 en https://descargarmaquinasvirtuales.com/distribuciones/zorin-os/',
        ]);
    }
}
