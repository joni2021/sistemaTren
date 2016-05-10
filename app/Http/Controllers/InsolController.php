<?php
namespace app\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 29/01/2016
 * Time: 11:20 AM
 */
use app\Entities\Persona;
use app\Http\Functions\ApimdsFunction;
use app\Http\Repositories\TrabajadoraSocialRepo;
use app\Http\Repositories\SubsidioRepo;
use app\Http\Repositories\AyudaDirectaRepo;
use app\Http\Repositories\PersonaRepo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Input;
use Illuminate\Http\Request;

class InsolController extends Controller
{
    protected  $api ;

    public function __construct(ApimdsFunction $api)
    {
        $this->api = $api;
    }

    public function getPendientes()
    {
        $metodo                  = 'getSolicitudesPendientesByClasificacion';
        $parametro               = '1';
        $data['solicitudes']     =  json_decode($this->api->post(env('API_MDS_URL_INSOL').$metodo,$parametro));

        return view('insol.pendientes')->with($data);
    }

    public function getPendientesDetail($idSolicitud = null)
    {
        $metodo                     =  'getInfoSolicitud';
        $parametro                  =  $idSolicitud;
        $detalle                    =  json_decode($this->api->post(env('API_MDS_URL_INSOL').$metodo,$parametro));

        $data['solicitudDetail']    = $detalle[0][0];
        $data['personaDetail']      = $detalle[2][0];
        $data['prestaciones']       = $detalle[3];

        $data['solicitudId']     = $idSolicitud;

        return view('insol.pendientes_detail')->with($data);
    }

}