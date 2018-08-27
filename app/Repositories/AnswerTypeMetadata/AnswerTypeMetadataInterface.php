<?php

namespace App\Repositories\AnswerTypeMetadata;

use Illuminate\Http\Request;

/**
 * Defining interfaces for Question repository
 */
interface AnswerTypeMetadataInterface
{

    /**
     * Update or Create
     * @param array $data
     * @return mixed
     */
    public function updateOrCreate(Request $request);

    /**
     * Delete
     * @param array $data
     * @return mixed
     */
    public function delete($id);


    /**
     * Get total AnswerTypeMetadata for dashboard
     * @return mixed
     */
    public function getTotal();

}
