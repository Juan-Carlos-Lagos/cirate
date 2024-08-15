<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BdController extends Controller
{
    public function createBackup(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'folder' => 'required|string|max:255'
        ]);

        $backupName = $request->input('name');
        $destinationPath = $request->input('folder');

        $databaseName = env('DB_DATABASE');
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $host = env('DB_HOST');

        $backupFile = storage_path("app/{$backupName}.sql");

        $command = "PGPASSWORD={$password} pg_dump --host={$host} --username={$username} {$databaseName} > {$backupFile}";

        $result = null;
        $output = null;
        exec($command, $output, $result);

        if ($result == 0) {
            Storage::put("{$destinationPath}/{$backupName}.sql", File::get($backupFile));
            File::delete($backupFile);
            return back()->with('success', 'Copia de seguridad creada exitosamente.');
        } else {
            return back()->with('error', 'Error al crear la copia de seguridad.');
        }
    }
}
