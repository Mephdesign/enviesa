<?php

namespace Modules\Strony\Repositories;

use App\Models\CmsStrona;
use Illuminate\Support\Facades\DB;

class WriteStroneRepository implements WriteStroneRepositoryContract
{

    public function create(
        string $nazwa,
        string $slug,
        int $status,
    ): int
    {
        return DB::table('cms_strony')->insertGetId([
            'nazwa' => $nazwa,
            'slug' => $slug,
            'status' => $status,
        ]);
    }

    public function update(
        int $id,
        string $nazwa,
        string $slug,
        string $zajawka,
        string $content,
        int $status,
    ): array
    {
        $result = CmsStrona::find($id);

        if ($result)
        {
            $result->nazwa = $nazwa;
            $result->slug = $slug;
            $result->zajawka = $zajawka;
            $result->content = $content;
            $result->status = $status;
            $result->save();

            return [
                'status' => 'success'
            ];
        }else
        {
            return [
                'status' => 'Nie ma takiej strony'
            ];
        }
    }

    /**
     * @param int $id
     * @param string $img
     * @return string[]
     */
    public function ustawZdjecieStrony(
        int $id,
        string $img
    ): array
    {

        $result = CmsStrona::find($id);

        if ($result)
        {
            $result->img = $img;
            $result->save();

            return [
                'status' => 'success'
            ];
        }else
        {
            return [
                'status' => 'Nie ma takiego produktu'
            ];
        }

    }
}
