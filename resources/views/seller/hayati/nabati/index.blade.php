@extends('seller.index')

@section('content')

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
  <div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
      <div class="kt-portlet__head-label">
        <span class="kt-portlet__head-icon">
          <i class="kt-font-brand flaticon2-infographic"></i>
        </span>
        <h3 class="kt-portlet__head-title">
          Nabati
          <small>berisi data seluruh data NABATI</small>
        </h3>
      </div>
      <div class="kt-portlet__head-toolbar">
        <div class="kt-portlet__head-wrapper">
          <div class="kt-portlet__head-actions">
            <div class="dropdown dropdown-inline">
              <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="la la-download"></i> Export
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__section kt-nav__section--first">
                    <span class="kt-nav__section-text">Choose an option</span>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon la la-print"></i>
                      <span class="kt-nav__link-text">Print</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon la la-copy"></i>
                      <span class="kt-nav__link-text">Copy</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon la la-file-excel-o"></i>
                      <span class="kt-nav__link-text">Excel</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon la la-file-text-o"></i>
                      <span class="kt-nav__link-text">CSV</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                      <span class="kt-nav__link-text">PDF</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            &nbsp;
            <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
              <i class="la la-plus"></i>
              New Record
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="kt-portlet__body">

      <!--begin: Search Form -->
      <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
        <div class="row align-items-center">
          <div class="col-xl-8 order-2 order-xl-1">
            <div class="row align-items-center">
              <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                <div class="kt-input-icon kt-input-icon--left">
                  <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                  <span class="kt-input-icon__icon kt-input-icon__icon--left">
                    <span><i class="la la-search"></i></span>
                  </span>
                </div>
              </div>
              <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                <div class="kt-form__group kt-form__group--inline">
                  <div class="kt-form__label">
                    <label>Status:</label>
                  </div>
                  <div class="kt-form__control">
                    <select class="form-control bootstrap-select" id="kt_form_status">
                      <option value="">All</option>
                      <option value="1">Pending</option>
                      <option value="2">Delivered</option>
                      <option value="3">Canceled</option>
                      <option value="4">Success</option>
                      <option value="5">Info</option>
                      <option value="6">Danger</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                <div class="kt-form__group kt-form__group--inline">
                  <div class="kt-form__label">
                    <label>Type:</label>
                  </div>
                  <div class="kt-form__control">
                    <select class="form-control bootstrap-select" id="kt_form_type">
                      <option value="">All</option>
                      <option value="1">Online</option>
                      <option value="2">Retail</option>
                      <option value="3">Direct</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
            <a href="#" class="btn btn-default kt-hidden">
              <i class="la la-cart-plus"></i> New Order
            </a>
            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
          </div>
        </div>
      </div>

      <!--end: Search Form -->
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">

      <!--begin: Datatable -->
      <table class="nabatidatable" id="html_table" width="100%">
        <thead>
          <tr>
            <th title="Field #1">Order ID</th>
            <th title="Field #2">Car Make</th>
            <th title="Field #3">Car Model</th>
            <th title="Field #4">Color</th>
            <th title="Field #5">Deposit Paid</th>
            <th title="Field #6">Order Date</th>
            <th title="Field #7">Status</th>
            <th title="Field #8">Type</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>0006-3629</td>
            <td>Land Rover</td>
            <td>Range Rover</td>
            <td>Orange</td>
            <td>$22672.60</td>
            <td>2016-11-28</td>
            <td align="right">3</td>
            <td align="right">3</td>
          </tr>
          <tr>
            <td>66403-315</td>
            <td>GMC</td>
            <td>Jimmy</td>
            <td>Goldenrod</td>
            <td>$55141.29</td>
            <td>2017-04-29</td>
            <td align="right">3</td>
            <td align="right">2</td>
          </tr>
          <tr>
            <td>54868-5055</td>
            <td>Ford</td>
            <td>Club Wagon</td>
            <td>Goldenrod</td>
            <td>$70991.52</td>
            <td>2017-03-16</td>
            <td align="right">6</td>
            <td align="right">1</td>
          </tr>
          <tr>
            <td>44924-112</td>
            <td>GMC</td>
            <td>Envoy</td>
            <td>Indigo</td>
            <td>$42615.31</td>
            <td>2016-09-04</td>
            <td align="right">2</td>
            <td align="right">1</td>
          </tr>
          <tr>
            <td>0378-0357</td>
            <td>Saab</td>
            <td>9-5</td>
            <td>Teal</td>
            <td>$74919.63</td>
            <td>2017-09-21</td>
            <td align="right">4</td>
            <td align="right">2</td>
          </tr>
          <tr>
            <td>0363-0590</td>
            <td>Suzuki</td>
            <td>Grand Vitara</td>
            <td>Crimson</td>
            <td>$72908.80</td>
            <td>2017-04-03</td>
            <td align="right">5</td>
            <td align="right">1</td>
          </tr>
          <tr>
            <td>35356-778</td>
            <td>Dodge</td>
            <td>Ram 2500</td>
            <td>Goldenrod</td>
            <td>$13569.00</td>
            <td>2016-03-22</td>
            <td align="right">5</td>
            <td align="right">1</td>
          </tr>
          <tr>
            <td>48951-3040</td>
            <td>Mitsubishi</td>
            <td>Eclipse</td>
            <td>Aquamarine</td>
            <td>$22471.73</td>
            <td>2016-04-17</td>
            <td align="right">1</td>
            <td align="right">2</td>
          </tr>
          <tr>
            <td>0487-9801</td>
            <td>Pontiac</td>
            <td>GTO</td>
            <td>Green</td>
            <td>$43149.39</td>
            <td>2016-05-27</td>
            <td align="right">4</td>
            <td align="right">1</td>
          </tr>
          <tr>
            <td>54753-003</td>
            <td>Audi</td>
            <td>S4</td>
            <td>Turquoise</td>
            <td>$39286.74</td>
            <td>2016-07-23</td>
            <td align="right">5</td>
            <td align="right">2</td>
          </tr>
          <tr>
            <td>34460-6006</td>
            <td>Audi</td>
            <td>Allroad</td>
            <td>Mauv</td>
            <td>$47394.02</td>
            <td>2016-06-21</td>
            <td align="right">3</td>
            <td align="right">3</td>
          </tr>
          <tr>
            <td>62802-106</td>
            <td>GMC</td>
            <td>Sierra 1500</td>
            <td>Teal</td>
            <td>$47469.52</td>
            <td>2016-05-06</td>
            <td align="right">3</td>
            <td align="right">1</td>
          </tr>
          <tr>
            <td>43269-664</td>
            <td>Buick</td>
            <td>Terraza</td>
            <td>Orange</td>
            <td>$94980.73</td>
            <td>2017-08-17</td>
            <td align="right">3</td>
            <td align="right">1</td>
          </tr>
          <tr>
            <td>65862-602</td>
            <td>Ford</td>
            <td>Crown Victoria</td>
            <td>Green</td>
            <td>$36215.40</td>
            <td>2016-09-01</td>
            <td align="right">6</td>
            <td align="right">3</td>
          </tr>
          <tr>
            <td>18527-119</td>
            <td>Toyota</td>
            <td>Sequoia</td>
            <td>Mauv</td>
            <td>$46000.92</td>
            <td>2016-05-17</td>
            <td align="right">6</td>
            <td align="right">2</td>
          </tr>
        </tbody>
      </table>

      <!--end: Datatable -->
    </div>
  </div>
</div>
@endsection

@push('footer-scripts')
<script src="{{ asset('js/admin/datatable/nabatidatatable.js')}}" type="text/javascript"></script>
@endpush
