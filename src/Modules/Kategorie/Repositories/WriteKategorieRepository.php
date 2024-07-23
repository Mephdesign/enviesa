<?php

namespace Modules\Kategorie\Repositories;

use App\Models\CmsStrona;
use Illuminate\Support\Facades\DB;

class WriteKategorieRepository implements WriteKategorieRepositoryContract
{

    public function create(
        string $nazwa,
        string $slug,
    ): int
    {
        return DB::table('cms_kategorie')->insertGetId([
            'nazwa' => $nazwa,
            'slug' => $slug,
        ]);
    }

    public function update(
        int $id,
        string $nazwa,
        string $slug,
    ): array
    {
        $result = CmsKategoria::find($id);

        if ($result)
        {
            $result->nazwa = $nazwa;
            $result->slug = $slug;
            $result->save();

            return [
                'status' => 'success'
            ];
        }else
        {
            return [
                'status' => 'Nie ma takiej kategorie'
            ];
        }
    }
}
