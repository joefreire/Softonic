<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public $sources = [
        'app',
        'developer'
    ];
    public function getAppData($drive, $id) {
        $result = [];
        if($drive == 'file') {
            $result['app'] = $this->getInfoFile($id, storage_path('app/app.json'));
            if(isset($result['app']['developer_id'])) {
                $result['developer'] = $this->getInfoFile($result['app']['developer_id'], storage_path('app/developer.json'));
            }
            $fomated = $this->formatData($result);
            return $fomated;
        }
        return response()->json('To be implemented');
    }
    public function getInfoFile($id,$filename) {
        if (file_exists($filename)) {
            $json = json_decode(file_get_contents($filename), true);
            $results = array_filter($json, function($json) use ($id) {
                return $json['id'] == $id;
            });
            return $results[0] ?? [];
        } else {
            return 'File not exist';
        }
    }
    public function getInfoDB($id) {
        return 'To be implemented';
    }
    public function getInfoXML($id) {
        return 'To be implemented';
    }
    public function formatData($data) {
        $result = [];
        if(!empty($data['app'])){
            $result['id'] = $data['app']['id'];
            if(isset($data['developer'])){
                $result['author_info']['name'] = $data['developer']['name'];
                $result['author_info']['url'] = $data['developer']['url'];
            }
            $result['title'] = $data['app']['title'];
            $result['version'] = $data['app']['version'];
            $result['url'] = $data['app']['url'];
            $result['short_description'] = $data['app']['short_description'];
            $result['license'] = $data['app']['license'];
            $result['thumbnail'] = $data['app']['thumbnail'];
            $result['rating'] = $data['app']['rating'];
            $result['total_downloads'] = $data['app']['total_downloads'];
            if(isset($data['app']['compatible']) && is_array($data['app']['compatible'])) {
                $result['compatible'] = implode('|',$data['app']['compatible']);
            }            
        }
        return $result;
    }
}
