@extends('layouts.masterpenulis')
  <!-- vertical navbar end -->
@section('content')
  <!-- content -->
  <div class="content">
    <main>
      <div class="container-fluid">
        <div class="row my-3 shadow-sm">
          <p><strong>Dashboard</strong> | Admin</p>
        </div>
        <div class="row">
          <div class="col-md-4 my-3">
            <div class="shadow-lg p-3 mb-5 bg-white rounded px-3 py-3">
              <h4 class="mb-2">New Clients</h4>
              <div class="progress" style="height: 16px;">
                <div
                  class="progress-bar bg-warning"
                  role="progressbar"
                  style="width: 25%;"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  25
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="shadow-lg p-3 mb-5 bg-white rounded px-3 py-3">
              <h4 class="mb-2">New Projects</h4>
              <div class="progress" style="height: 16px;">
                <div
                  class="progress-bar bg-info"
                  role="progressbar"
                  style="width: 50%;"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  50
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="shadow-lg p-3 mb-5 bg-white rounded p-3">
              <h4 class="mb-2">Completed</h4>
              <div class="progress" style="height: 16px;">
                <div
                  class="progress-bar bg-success"
                  role="progressbar"
                  style="width: 80%;"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  80
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class=" my-2 p-3 shadow-lg p-3 mb-5 bg-white rounded px-3 py-3">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Ratione libero totam rerum eos nam ab perspiciatis voluptatum
              in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
              sunt earum tempora veniam.
            </div>
          </div>
          <div class="col-md-6">
            <div class="my-2 p-3 shadow-lg p-3 mb-5 bg-white rounded px-3 py-3">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Ratione libero totam rerum eos nam ab perspiciatis voluptatum
              in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
              sunt earum tempora veniam.
            </div>
          </div>
        </div>
        <div class="row mr-1 ml-1 my-2 p-3 shadow-lg mb-5 bg-white rounded">
            <div class="progress my-2">
              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress my-2">
              <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress my-2">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress my-2">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class=" my-2 p-3 shadow-lg p-3 mb-5 bg-white rounded px-3 py-3">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Ratione libero totam rerum eos nam ab perspiciatis voluptatum
              in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
              sunt earum tempora veniam.
            </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col my-2 mr-2 p-3 shadow-lg p-3 mb-1 bg-white rounded px-3 py-3">Column</div>
                <div class="col my-2 mr-2 p-3 shadow-lg p-3 mb-1 bg-white rounded px-3 py-3">Column</div>
                <div class="w-100"></div>
                <div class="col my-2 mr-2 p-3 shadow-lg p-3 mb-5 bg-white rounded px-3 py-3">Column</div>
                <div class="col my-2 mr-2 p-3 shadow-lg p-3 mb-5 bg-white rounded px-3 py-3">Column</div>
              </div>
            </div>
        </div>

        <div class="row my-2 mr-2 p-3 ml-1 shadow-lg p-3 mb-1 bg-white rounded px-3 py-3">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Ratione libero totam rerum eos nam ab perspiciatis voluptatum
          in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
          sunt earum tempora veniam.
        </div>

      </div>
    </main>
  </div>
  @stop
