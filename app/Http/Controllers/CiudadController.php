<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCiudadRequest;
use App\Http\Requests\UpdateCiudadRequest;
use App\Repositories\CiudadRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Departamento;
use Illuminate\Http\Request;
use Flash;
use Response;

class CiudadController extends AppBaseController
{
    /** @var CiudadRepository $ciudadRepository*/
    private $ciudadRepository;

    public function __construct(CiudadRepository $ciudadRepo)
    {
        $this->ciudadRepository = $ciudadRepo;
    }

    /**
     * Display a listing of the Ciudad.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ciudads = $this->ciudadRepository->all();

        return view('ciudads.index')
            ->with('ciudads', $ciudads);
    }

    /**
     * Show the form for creating a new Ciudad.
     *
     * @return Response
     */
    public function create()
    {
        $departamentos = Departamento::pluck('nombre_departamento','id');
        return view('ciudads.create',compact('departamentos'));
    }

    /**
     * Store a newly created Ciudad in storage.
     *
     * @param CreateCiudadRequest $request
     *
     * @return Response
     */
    public function store(CreateCiudadRequest $request)
    {
        $input = $request->all();

        $ciudad = $this->ciudadRepository->create($input);

        Flash::success('Ciudad saved successfully.');

        return redirect(route('ciudads.index'));
    }

    /**
     * Display the specified Ciudad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ciudad = $this->ciudadRepository->find($id);

        if (empty($ciudad)) {
            Flash::error('Ciudad not found');

            return redirect(route('ciudads.index'));
        }

        return view('ciudads.show')->with('ciudad', $ciudad);
    }

    /**
     * Show the form for editing the specified Ciudad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ciudad = $this->ciudadRepository->find($id);
        $departamentos = Departamento::pluck('nombre_departamento','id');

        if (empty($ciudad)) {
            Flash::error('Ciudad not found');

            return redirect(route('ciudads.index'));
        }

        return view('ciudads.edit',compact('departamentos'))->with('ciudad', $ciudad);
    }

    /**
     * Update the specified Ciudad in storage.
     *
     * @param int $id
     * @param UpdateCiudadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCiudadRequest $request)
    {
        $ciudad = $this->ciudadRepository->find($id);

        if (empty($ciudad)) {
            Flash::error('Ciudad not found');

            return redirect(route('ciudads.index'));
        }

        $ciudad = $this->ciudadRepository->update($request->all(), $id);

        Flash::success('Ciudad updated successfully.');

        return redirect(route('ciudads.index'));
    }

    /**
     * Remove the specified Ciudad from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ciudad = $this->ciudadRepository->find($id);

        if (empty($ciudad)) {
            Flash::error('Ciudad not found');

            return redirect(route('ciudads.index'));
        }

        $this->ciudadRepository->delete($id);

        Flash::success('Ciudad deleted successfully.');

        return redirect(route('ciudads.index'));
    }
}
