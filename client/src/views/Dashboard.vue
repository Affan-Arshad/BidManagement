<template>
  <div class="container py-5">
    <h3>Dashboard</h3>
    <hr />

    <div class="row" id="dashboard-cards">
      <div class="col-12 mb-5">
        <div class="d-none">
          <a
            href="http://localhost:8000/push/bidsToday"
            class="btn btn-outline-primary btn-block"
          >Notify Today Bids</a>
          <a
            href="http://localhost:8000/push/bidsTomorrow"
            class="btn btn-outline-primary btn-block"
          >Notify Tomorrow Bids</a>
        </div>

        <div class="card">
          <div class="card-header" data-toggle="collapse" data-target="#Ongoing-collapse">
            <h5 class="mb-0">
              Ongoing Bids
              <span class="badge badge-primary float-right">1</span>
            </h5>
          </div>
          <div class="card-body collapse" id="Ongoing-collapse" data-parent="#dashboard-cards">
            <ul class="list-group">
              <div class="bootstrap-table bootstrap4">
                <div class="fixed-table-toolbar"></div>

                <div class="fixed-table-container" style="padding-bottom: 0px;">
                  <div class="fixed-table-header" style="display: none;">
                    <table></table>
                  </div>
                  <div class="fixed-table-body">
                    <div
                      class=" table table-bordered table-hover"
                      style="top: 1px;"
                    >
                      <span class="loading-wrap">
                        <span class="loading-text">Loading, please wait</span>
                        <span class="animation-wrap">
                          <span class="animation-dot"></span>
                        </span>
                      </span>
                    </div>
                    <table
                      data-toggle="table"
                      data-mobile-responsive="true"
                      class="table table-bordered table-hover"
                    >
                      <thead style>
                        <tr>
                          <th style data-field="0">
                            <div class="th-inner">Name</div>
                            <div class="fht-cell"></div>
                          </th>
                          <th style data-field="1">
                            <div class="th-inner">Status</div>
                            <div class="fht-cell"></div>
                          </th>
                          <th style data-field="2">
                            <div class="th-inner">Signed</div>
                            <div class="fht-cell"></div>
                          </th>
                          <th style data-field="3">
                            <div class="th-inner">Due</div>
                            <div class="fht-cell"></div>
                          </th>
                          <th style data-field="4">
                            <div class="th-inner">Extended</div>
                            <div class="fht-cell"></div>
                          </th>
                          <th style data-field="5">
                            <div class="th-inner">Duration</div>
                            <div class="fht-cell"></div>
                          </th>
                          <th style data-field="6">
                            <div class="th-inner">Remaining</div>
                            <div class="fht-cell"></div>
                          </th>
                          <th style data-field="7">
                            <div class="th-inner">LD</div>
                            <div class="fht-cell"></div>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-index="0">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/88">
                              NAS |
                              Public Service Media
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-danger"
                              onclick="changeStatusModal({&quot;id&quot;:88,&quot;name&quot;:&quot;NAS&quot;,&quot;iulaan_no&quot;:&quot;(IUL) PSM-FP\/ PSM\/2019\/70&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/110262&quot;,&quot;category&quot;:&quot;IT Equipment&quot;,&quot;cost&quot;:81960,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-29 14:00:00&quot;,&quot;organization_id&quot;:36,&quot;status_id&quot;:&quot;pending_agreement&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-29 20:23:24&quot;,&quot;updated_at&quot;:&quot;2019-09-11 17:20:43&quot;,&quot;remaining_days&quot;:&quot;Set Agreement Date &amp; Duration&quot;,&quot;organization&quot;:{&quot;id&quot;:36,&quot;name&quot;:&quot;Public Service Media&quot;,&quot;created_at&quot;:&quot;2019-08-29 20:21:33&quot;,&quot;updated_at&quot;:&quot;2019-08-29 20:21:33&quot;}})"
                            >Pending agreement</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                          <td style>Set Agreement Date &amp; Duration</td>
                          <td class="auto-numeric" style></td>
                        </tr>
                      </tbody>
                      <tfoot style="display: none;">
                        <tr></tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="fixed-table-footer">
                    <table>
                      <thead>
                        <tr></tr>
                      </thead>
                    </table>
                  </div>
                </div>
                <div class="fixed-table-pagination" style="display: none;"></div>
              </div>
              <div class="clearfix"></div>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-12 mb-5">
        <div class="card">
          <div class="card-header" data-toggle="collapse" data-target="#submissions-collapse">
            <h5 class="mb-0">
              Upcoming Submissions
              <span class="badge badge-primary float-right">5</span>
            </h5>
          </div>
          <div class="card-body collapse" id="submissions-collapse" data-parent="#dashboard-cards">
            <ul class="list-group">
              <div class="bootstrap-table bootstrap4">
                <div class="fixed-table-toolbar"></div>

                <div class="fixed-table-container" style="padding-bottom: 0px;">
                  <div class="fixed-table-header" style="display: none;">
                    <table></table>
                  </div>
                  <div class="fixed-table-body">
                    <div
                      class="fixed-table-loading table table-bordered table-hover"
                      style="top: 1px;"
                    >
                      <span class="loading-wrap">
                        <span class="loading-text">Loading, please wait</span>
                        <span class="animation-wrap">
                          <span class="animation-dot"></span>
                        </span>
                      </span>
                    </div>
                    <table
                      data-toggle="table"
                      data-mobile-responsive="true"
                      class="table table-bordered table-hover"
                    >
                      <thead style>
                        <tr>
                          <th style data-field="0">
                            <div class="th-inner">Name</div>
                            <div class="fht-cell"></div>
                          </th>
                          <th style data-field="1">
                            <div class="th-inner">Status</div>
                            <div class="fht-cell"></div>
                          </th>
                          <th style data-field="2">
                            <div class="th-inner">Date</div>
                            <div class="fht-cell"></div>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-index="0">
                          <td class="link" style>
                            <a
                              class="btn text-left"
                              href="/bids/10"
                            >Electrical wiring | Cricket Board of Maldives</a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-success"
                              onclick="changeStatusModal({&quot;id&quot;:10,&quot;name&quot;:&quot;Electrical wiring&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Electrical works&quot;,&quot;cost&quot;:158006,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:&quot;2019-08-01 00:00:00&quot;,&quot;submission_date&quot;:&quot;2019-07-11 11:00:00&quot;,&quot;organization_id&quot;:9,&quot;status_id&quot;:&quot;ready_for_submission&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-11 17:40:48&quot;,&quot;updated_at&quot;:&quot;2019-09-01 06:13:44&quot;,&quot;status_color&quot;:&quot;success&quot;,&quot;organization&quot;:{&quot;id&quot;:9,&quot;name&quot;:&quot;Cricket Board of Maldives&quot;,&quot;created_at&quot;:&quot;2019-07-11 17:38:27&quot;,&quot;updated_at&quot;:&quot;2019-07-11 17:38:27&quot;}})"
                            >Ready for submission</a>
                          </td>
                          <td style>11 Jul 2019 - 11:00 am</td>
                        </tr>
                        <tr data-index="1">
                          <td class="link" style>
                            <a
                              class="btn text-left"
                              href="/bids/80"
                            >Harddisk Supply | Elections Commission</a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-warning"
                              onclick="changeStatusModal({&quot;id&quot;:80,&quot;name&quot;:&quot;Harddisk Supply&quot;,&quot;iulaan_no&quot;:&quot;(A)DC-2019\/213&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/108943&quot;,&quot;category&quot;:&quot;ICT Equipment&quot;,&quot;cost&quot;:58016.04,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-22 11:00:00&quot;,&quot;organization_id&quot;:27,&quot;status_id&quot;:&quot;pending_proposal&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-22 18:21:41&quot;,&quot;updated_at&quot;:&quot;2019-09-28 14:47:33&quot;,&quot;status_color&quot;:&quot;warning&quot;,&quot;organization&quot;:{&quot;id&quot;:27,&quot;name&quot;:&quot;Elections Commission&quot;,&quot;created_at&quot;:&quot;2019-08-17 21:57:36&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:57:36&quot;}})"
                            >Pending proposal</a>
                          </td>
                          <td style>22 Aug 2019 - 11:00 am</td>
                        </tr>
                        <tr data-index="2">
                          <td class="link" style>
                            <a
                              class="btn text-left"
                              href="/bids/83"
                            >Health Furniture - Abduh-Samad Memorial Hospital | Ministry of Health</a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-success"
                              onclick="changeStatusModal({&quot;id&quot;:83,&quot;name&quot;:&quot;Health Furniture - Abduh-Samad Memorial Hospital&quot;,&quot;iulaan_no&quot;:&quot;ASMH\/MSS\/IUL\/2019\/05&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/109278&quot;,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:411400.33,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-26 10:00:00&quot;,&quot;organization_id&quot;:35,&quot;status_id&quot;:&quot;ready_for_submission&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-26 18:28:41&quot;,&quot;updated_at&quot;:&quot;2019-09-28 13:16:12&quot;,&quot;status_color&quot;:&quot;success&quot;,&quot;organization&quot;:{&quot;id&quot;:35,&quot;name&quot;:&quot;Ministry of Health&quot;,&quot;created_at&quot;:&quot;2019-08-26 18:24:18&quot;,&quot;updated_at&quot;:&quot;2019-08-26 18:24:18&quot;}})"
                            >Ready for submission</a>
                          </td>
                          <td style>26 Aug 2019 - 10:00 am</td>
                        </tr>
                        <tr data-index="3">
                          <td class="link" style>
                            <a
                              class="btn text-left"
                              href="/bids/84"
                            >Health Furniture - Kulhudhuhfushi Regional Hospital | Ministry of Health</a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-success"
                              onclick="changeStatusModal({&quot;id&quot;:84,&quot;name&quot;:&quot;Health Furniture - Kulhudhuhfushi Regional Hospital&quot;,&quot;iulaan_no&quot;:&quot;(IUL)KRH-PLD\/2019\/14&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/109318&quot;,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:447879.49,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-26 10:00:00&quot;,&quot;organization_id&quot;:35,&quot;status_id&quot;:&quot;ready_for_submission&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-26 18:50:07&quot;,&quot;updated_at&quot;:&quot;2019-09-28 13:15:37&quot;,&quot;status_color&quot;:&quot;success&quot;,&quot;organization&quot;:{&quot;id&quot;:35,&quot;name&quot;:&quot;Ministry of Health&quot;,&quot;created_at&quot;:&quot;2019-08-26 18:24:18&quot;,&quot;updated_at&quot;:&quot;2019-08-26 18:24:18&quot;}})"
                            >Ready for submission</a>
                          </td>
                          <td style>26 Aug 2019 - 10:00 am</td>
                        </tr>
                        <tr data-index="4">
                          <td class="link" style>
                            <a
                              class="btn text-left"
                              href="/bids/86"
                            >MRC server | Ministry of Fisheries and Agriculture</a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-success"
                              onclick="changeStatusModal({&quot;id&quot;:86,&quot;name&quot;:&quot;MRC server&quot;,&quot;iulaan_no&quot;:&quot;(IUL)30\/3002019\/174&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/109767&quot;,&quot;category&quot;:&quot;IT Equipment&quot;,&quot;cost&quot;:70720,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-26 11:00:00&quot;,&quot;organization_id&quot;:12,&quot;status_id&quot;:&quot;ready_for_submission&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-26 19:57:39&quot;,&quot;updated_at&quot;:&quot;2019-09-28 14:35:38&quot;,&quot;status_color&quot;:&quot;success&quot;,&quot;organization&quot;:{&quot;id&quot;:12,&quot;name&quot;:&quot;Ministry of Fisheries and Agriculture&quot;,&quot;created_at&quot;:&quot;2019-07-25 20:08:04&quot;,&quot;updated_at&quot;:&quot;2019-07-25 20:08:04&quot;}})"
                            >Ready for submission</a>
                          </td>
                          <td style>26 Aug 2019 - 11:00 am</td>
                        </tr>
                      </tbody>
                      <tfoot style="display: none;">
                        <tr></tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="fixed-table-footer">
                    <table>
                      <thead>
                        <tr></tr>
                      </thead>
                    </table>
                  </div>
                </div>
                <div class="fixed-table-pagination" style="display: none;"></div>
              </div>
              <div class="clearfix"></div>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-12 mb-5">
        <div class="card">
          <div class="card-header" data-toggle="collapse" data-target="#infos-collapse">
            <h5 class="mb-0">
              Upcoming Infos
              <span class="badge badge-primary float-right">63</span>
            </h5>
          </div>
          <div class="card-body collapse" id="infos-collapse" data-parent="#dashboard-cards">
            <ul class="list-group">
              <div class="bootstrap-table bootstrap4">
                <div class="fixed-table-toolbar"></div>

                <div class="fixed-table-container" style="padding-bottom: 0px;">
                  <div class="fixed-table-header" style="display: none;">
                    <table></table>
                  </div>
                  <div class="fixed-table-body">
                    <div
                      class="fixed-table-loading table table-bordered table-hover"
                      style="top: 1px;"
                    >
                      <span class="loading-wrap">
                        <span class="loading-text">Loading, please wait</span>
                        <span class="animation-wrap">
                          <span class="animation-dot"></span>
                        </span>
                      </span>
                    </div>
                    <table
                      data-toggle="table"
                      data-mobile-responsive="true"
                      class="table table-bordered table-hover"
                    >
                      <thead style>
                        <tr>
                          <th style data-field="0">
                            <div class="th-inner">Name</div>
                            <div class="fht-cell"></div>
                          </th>
                          <th style data-field="1">
                            <div class="th-inner">Status</div>
                            <div class="fht-cell"></div>
                          </th>
                          <th style data-field="2">
                            <div class="th-inner">Registration starts</div>
                            <div class="fht-cell"></div>
                          </th>
                          <th style data-field="3">
                            <div class="th-inner">Registration ends</div>
                            <div class="fht-cell"></div>
                          </th>
                          <th style data-field="4">
                            <div class="th-inner">Prebid Meeting</div>
                            <div class="fht-cell"></div>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-index="0">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/81">
                              FireFighting Equipment |
                              Ministry of Environment and Energy
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:81,&quot;name&quot;:&quot;FireFighting Equipment&quot;,&quot;iulaan_no&quot;:&quot;(IUL)438-MCEP\/438\/2019\/210&quot;,&quot;link&quot;:&quot;www.gazette.gov.mv\/iulaan\/view\/109029&quot;,&quot;category&quot;:&quot;Equipment&quot;,&quot;cost&quot;:364094.74,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-24 11:00:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-25 18:18:38&quot;,&quot;updated_at&quot;:&quot;2019-08-25 19:04:06&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="1">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/61">
                              Other Working materials |
                              National Drug Agency
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:61,&quot;name&quot;:&quot;Other Working materials&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-23 12:00:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:45:13&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:45:13&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="2">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/49">
                              550 Tablets |
                              Elections Commission
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:49,&quot;name&quot;:&quot;550 Tablets&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-08-09 14:00:00&quot;,&quot;organization_id&quot;:27,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:58:07&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:58:07&quot;,&quot;organization&quot;:{&quot;id&quot;:27,&quot;name&quot;:&quot;Elections Commission&quot;,&quot;created_at&quot;:&quot;2019-08-17 21:57:36&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:57:36&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="3">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/50">
                              TV |
                              Ministry of Education
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:50,&quot;name&quot;:&quot;TV&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Electronics&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-08-05 12:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 22:03:21&quot;,&quot;updated_at&quot;:&quot;2019-08-17 22:03:21&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="4">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/51">
                              TV |
                              Ministry of Education
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:51,&quot;name&quot;:&quot;TV&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Electronics&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-07-19 10:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 22:05:03&quot;,&quot;updated_at&quot;:&quot;2019-08-17 22:05:03&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="5">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/52">
                              Music Instrument |
                              Ministry of Gender and Family
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:52,&quot;name&quot;:&quot;Music Instrument&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-10-13 10:00:00&quot;,&quot;organization_id&quot;:28,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 22:07:14&quot;,&quot;updated_at&quot;:&quot;2019-08-17 22:07:14&quot;,&quot;organization&quot;:{&quot;id&quot;:28,&quot;name&quot;:&quot;Ministry of Gender and Family&quot;,&quot;created_at&quot;:&quot;2019-08-17 22:06:17&quot;,&quot;updated_at&quot;:&quot;2019-08-17 22:06:17&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="6">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/53">
                              N1 School Furniture |
                              Ministry of Education
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:53,&quot;name&quot;:&quot;N1 School Furniture&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-10-10 12:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 22:10:15&quot;,&quot;updated_at&quot;:&quot;2019-08-17 22:10:15&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="7">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/54">
                              Bilge Pump |
                              Ministry of Defence
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:54,&quot;name&quot;:&quot;Bilge Pump&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-07-15 10:00:00&quot;,&quot;organization_id&quot;:29,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:26:33&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:26:33&quot;,&quot;organization&quot;:{&quot;id&quot;:29,&quot;name&quot;:&quot;Ministry of Defence&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:25:50&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:25:50&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="8">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/55">
                              3 Air Condition |
                              Supreme Court
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:55,&quot;name&quot;:&quot;3 Air Condition&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Air Condition&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-07-02 12:00:00&quot;,&quot;organization_id&quot;:16,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:29:30&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:29:30&quot;,&quot;organization&quot;:{&quot;id&quot;:16,&quot;name&quot;:&quot;Supreme Court&quot;,&quot;created_at&quot;:&quot;2019-07-31 17:22:29&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:06:12&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="9">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/56">
                              Furniture Fittings |
                              National Drug Agency
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:56,&quot;name&quot;:&quot;Furniture Fittings&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-23 12:00:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:34:07&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:36:37&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="10">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/57">
                              Plant, Machinery and Equipment |
                              National Drug Agency
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:57,&quot;name&quot;:&quot;Plant, Machinery and Equipment&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-23 12:00:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:37:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:37:22&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="11">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/58">
                              Plant, Machinery and Equipment |
                              National Drug Agency
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:58,&quot;name&quot;:&quot;Plant, Machinery and Equipment&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-23 12:00:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:39:47&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:39:47&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="12">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/59">
                              IT hardware |
                              National Drug Agency
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:59,&quot;name&quot;:&quot;IT hardware&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-23 12:00:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:41:40&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:41:40&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="13">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/60">
                              Other items |
                              National Drug Agency
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:60,&quot;name&quot;:&quot;Other items&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-23 12:00:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:42:54&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:42:54&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="14">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/62">
                              2 Working Station |
                              National Drug Agency
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:62,&quot;name&quot;:&quot;2 Working Station&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-09-20 11:00:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:51:36&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:51:36&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="15">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/47">
                              10 Sound System for MGT Schools |
                              Ministry of Education
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:47,&quot;name&quot;:&quot;10 Sound System for MGT Schools&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-06-11 11:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:51:35&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:51:35&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="16">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/63">
                              N1 School Furniture |
                              Ministry of Education
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:63,&quot;name&quot;:&quot;N1 School Furniture&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-10-28 13:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:55:52&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:55:52&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="17">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/64">
                              Machinery Supply and Installation |
                              National Drug Agency
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:64,&quot;name&quot;:&quot;Machinery Supply and Installation&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-09-20 11:30:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:58:29&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:58:29&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="18">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/65">
                              N1 School Furniture |
                              Ministry of Education
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:65,&quot;name&quot;:&quot;N1 School Furniture&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-11-13 10:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:01:23&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:01:23&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="19">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/66">
                              N1 School Furniture |
                              Ministry of Education
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:66,&quot;name&quot;:&quot;N1 School Furniture&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-11-13 10:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:02:42&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:02:42&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="20">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/67">
                              10 Laptop &amp; 10 Computer system |
                              Department of Judicial Administration
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:67,&quot;name&quot;:&quot;10 Laptop &amp; 10 Computer system&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-11-01 11:00:00&quot;,&quot;organization_id&quot;:31,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:04:54&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:04:54&quot;,&quot;organization&quot;:{&quot;id&quot;:31,&quot;name&quot;:&quot;Department of Judicial Administration&quot;,&quot;created_at&quot;:&quot;2019-08-18 04:04:10&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:04:10&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="21">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/68">
                              Flag and Flag post |
                              Ministry of Housing and Infrastructure
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:68,&quot;name&quot;:&quot;Flag and Flag post&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-08-27 14:00:00&quot;,&quot;organization_id&quot;:22,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:08:57&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:08:57&quot;,&quot;organization&quot;:{&quot;id&quot;:22,&quot;name&quot;:&quot;Ministry of Housing and Infrastructure&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:42:02&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:42:02&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="22">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/69">
                              AC installation |
                              National Drug Agency
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:69,&quot;name&quot;:&quot;AC installation&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Air Condition&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-09-20 11:30:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:12:06&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:12:06&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="23">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/70">
                              Garlando Board |
                              Ministry of Youth and Sports
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:70,&quot;name&quot;:&quot;Garlando Board&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-09-24 11:30:00&quot;,&quot;organization_id&quot;:32,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:15:48&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:15:48&quot;,&quot;organization&quot;:{&quot;id&quot;:32,&quot;name&quot;:&quot;Ministry of Youth and Sports&quot;,&quot;created_at&quot;:&quot;2019-08-18 04:15:05&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:15:05&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="24">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/71">
                              Machinery Supply and Installation |
                              National Drug Agency
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:71,&quot;name&quot;:&quot;Machinery Supply and Installation&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-10-02 11:30:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:18:24&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:18:24&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="25">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/72">
                              50 Trolley for Hanimadhoo Airport |
                              Regional Airport
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:72,&quot;name&quot;:&quot;50 Trolley for Hanimadhoo Airport&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-07-17 11:00:00&quot;,&quot;organization_id&quot;:2,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:23:00&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:34:33&quot;,&quot;organization&quot;:{&quot;id&quot;:2,&quot;name&quot;:&quot;Regional Airport&quot;,&quot;created_at&quot;:&quot;2019-07-08 20:32:28&quot;,&quot;updated_at&quot;:&quot;2019-07-08 20:32:28&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="26">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/73">
                              Furniture Fittings |
                              Ministry of Home Affairs
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:73,&quot;name&quot;:&quot;Furniture Fittings&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-07-09 10:00:00&quot;,&quot;organization_id&quot;:33,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:26:41&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:26:41&quot;,&quot;organization&quot;:{&quot;id&quot;:33,&quot;name&quot;:&quot;Ministry of Home Affairs&quot;,&quot;created_at&quot;:&quot;2019-08-18 04:25:57&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:25:57&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="27">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/74">
                              7 Computer Systems |
                              Ministry of Education
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:74,&quot;name&quot;:&quot;7 Computer Systems&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-05-21 11:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:29:25&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:29:25&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="28">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/77">
                              ICT equipment supply |
                              Ministry of Environment and Energy
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:77,&quot;name&quot;:&quot;ICT equipment supply&quot;,&quot;iulaan_no&quot;:&quot;(IUL)438-MCEP\/438\/2019\/24&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/108777&quot;,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:387602.72,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-18 13:00:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 19:48:46&quot;,&quot;updated_at&quot;:&quot;2019-08-20 01:06:27&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="29">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/46">
                              Provision of Water Supply Facilities |
                              Ministry of Environment and Energy
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:46,&quot;name&quot;:&quot;Provision of Water Supply Facilities&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Consultancy Services&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-01-25 11:30:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:49:44&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:49:44&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="30">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/76">
                              Office Partition System |
                              Ministry of Housing and Urban Development
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:76,&quot;name&quot;:&quot;Office Partition System&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-05-21 11:00:00&quot;,&quot;organization_id&quot;:3,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:35:06&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:35:06&quot;,&quot;organization&quot;:{&quot;id&quot;:3,&quot;name&quot;:&quot;Ministry of Housing and Urban Development&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:23:13&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:23:13&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="31">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/27">
                              Multi-functional Printer |
                              STELCO
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:27,&quot;name&quot;:&quot;Multi-functional Printer&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-03-27 10:00:00&quot;,&quot;organization_id&quot;:21,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:24:24&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:24:24&quot;,&quot;organization&quot;:{&quot;id&quot;:21,&quot;name&quot;:&quot;STELCO&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:15:28&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:15:28&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="32">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/78">
                              Highbay LED light |
                              STELCO
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:78,&quot;name&quot;:&quot;Highbay LED light&quot;,&quot;iulaan_no&quot;:&quot;H-2019\/107&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/109007&quot;,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:91320.96,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-18 10:00:00&quot;,&quot;organization_id&quot;:21,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 19:59:00&quot;,&quot;updated_at&quot;:&quot;2019-08-20 01:04:13&quot;,&quot;organization&quot;:{&quot;id&quot;:21,&quot;name&quot;:&quot;STELCO&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:15:28&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:15:28&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="33">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/15">
                              Drone |
                              Ministry of National Planning and Infrastructure
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:15,&quot;name&quot;:&quot;Drone&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Toy&quot;,&quot;cost&quot;:47340,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-27 12:00:00&quot;,&quot;organization_id&quot;:15,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-30 18:42:27&quot;,&quot;updated_at&quot;:&quot;2019-07-30 18:42:27&quot;,&quot;organization&quot;:{&quot;id&quot;:15,&quot;name&quot;:&quot;Ministry of National Planning and Infrastructure&quot;,&quot;created_at&quot;:&quot;2019-07-30 18:37:39&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:41:11&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="34">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/16">
                              AC 360000 |
                              Supreme Court
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:16,&quot;name&quot;:&quot;AC 360000&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;AC&quot;,&quot;cost&quot;:335000,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-01 10:00:00&quot;,&quot;organization_id&quot;:16,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-31 17:23:56&quot;,&quot;updated_at&quot;:&quot;2019-07-31 17:23:56&quot;,&quot;organization&quot;:{&quot;id&quot;:16,&quot;name&quot;:&quot;Supreme Court&quot;,&quot;created_at&quot;:&quot;2019-07-31 17:22:29&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:06:12&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="35">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/17">
                              IP Phone |
                              Fuel Supply Maldives
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:17,&quot;name&quot;:&quot;IP Phone&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;IT Equipment&quot;,&quot;cost&quot;:129309.6,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-04 11:00:00&quot;,&quot;organization_id&quot;:17,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-04 17:42:28&quot;,&quot;updated_at&quot;:&quot;2019-08-04 17:42:28&quot;,&quot;organization&quot;:{&quot;id&quot;:17,&quot;name&quot;:&quot;Fuel Supply Maldives&quot;,&quot;created_at&quot;:&quot;2019-08-04 17:40:49&quot;,&quot;updated_at&quot;:&quot;2019-08-04 17:40:49&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="36">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/19">
                              Graphics Card |
                              NCIT
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:19,&quot;name&quot;:&quot;Graphics Card&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;IT Equipment&quot;,&quot;cost&quot;:29824,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-08 11:00:00&quot;,&quot;organization_id&quot;:8,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-08 17:41:01&quot;,&quot;updated_at&quot;:&quot;2019-08-08 17:41:01&quot;,&quot;organization&quot;:{&quot;id&quot;:8,&quot;name&quot;:&quot;NCIT&quot;,&quot;created_at&quot;:&quot;2019-07-10 19:31:17&quot;,&quot;updated_at&quot;:&quot;2019-07-10 19:31:17&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="37">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/20">
                              IP phone |
                              Addu City Council
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:20,&quot;name&quot;:&quot;IP phone&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:222378.4,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-08 14:00:00&quot;,&quot;organization_id&quot;:26,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-10 04:11:17&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:34:10&quot;,&quot;organization&quot;:{&quot;id&quot;:26,&quot;name&quot;:&quot;Addu City Council&quot;,&quot;created_at&quot;:&quot;2019-08-17 21:31:35&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:31:35&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="38">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/21">
                              Waste Management Center |
                              Ministry of Environment and Energy
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:21,&quot;name&quot;:&quot;Waste Management Center&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Construction&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-02-01 11:00:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 19:52:25&quot;,&quot;updated_at&quot;:&quot;2019-08-17 19:52:25&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="39">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/22">
                              3M Security Strips |
                              Maldives National University
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:22,&quot;name&quot;:&quot;3M Security Strips&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-01-23 11:00:00&quot;,&quot;organization_id&quot;:19,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:01:46&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:01:46&quot;,&quot;organization&quot;:{&quot;id&quot;:19,&quot;name&quot;:&quot;Maldives National University&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:00:46&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:00:46&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="40">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/23">
                              15 Sound System |
                              Ministry of Education
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:23,&quot;name&quot;:&quot;15 Sound System&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-04-16 11:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:03:39&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:03:39&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="41">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/24">
                              6 Air Condition Installation |
                              Maldives Polytechnics
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:24,&quot;name&quot;:&quot;6 Air Condition Installation&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Electronics&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-04-02 10:00:00&quot;,&quot;organization_id&quot;:20,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:07:48&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:07:48&quot;,&quot;organization&quot;:{&quot;id&quot;:20,&quot;name&quot;:&quot;Maldives Polytechnics&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:06:26&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:06:26&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="42">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/25">
                              10 TV MGT School |
                              Ministry of Education
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:25,&quot;name&quot;:&quot;10 TV MGT School&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Electronics&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-11 11:30:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:10:07&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:10:07&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="43">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/26">
                              Receipt Printing Device |
                              STELCO
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:26,&quot;name&quot;:&quot;Receipt Printing Device&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Electronics&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-03-27 10:00:00&quot;,&quot;organization_id&quot;:21,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:16:31&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:16:31&quot;,&quot;organization&quot;:{&quot;id&quot;:21,&quot;name&quot;:&quot;STELCO&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:15:28&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:15:28&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="44">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/28">
                              PoE Network Switch |
                              STELCO
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:28,&quot;name&quot;:&quot;PoE Network Switch&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-03-27 11:00:00&quot;,&quot;organization_id&quot;:21,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:34:20&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:34:20&quot;,&quot;organization&quot;:{&quot;id&quot;:21,&quot;name&quot;:&quot;STELCO&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:15:28&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:15:28&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="45">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/45">
                              Materials for Engineering course |
                              Maldives Polytechnics
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:45,&quot;name&quot;:&quot;Materials for Engineering course&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-02-18 13:00:00&quot;,&quot;organization_id&quot;:20,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:46:32&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:46:32&quot;,&quot;organization&quot;:{&quot;id&quot;:20,&quot;name&quot;:&quot;Maldives Polytechnics&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:06:26&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:06:26&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="46">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/29">
                              Aluminium Sheet |
                              Ministry of Housing and Infrastructure
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:29,&quot;name&quot;:&quot;Aluminium Sheet&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Construction Material&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2016-12-13 10:00:00&quot;,&quot;organization_id&quot;:22,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:43:11&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:43:11&quot;,&quot;organization&quot;:{&quot;id&quot;:22,&quot;name&quot;:&quot;Ministry of Housing and Infrastructure&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:42:02&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:42:02&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="47">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/30">
                              Media Converter |
                              NCIT
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:30,&quot;name&quot;:&quot;Media Converter&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-02-11 10:15:00&quot;,&quot;organization_id&quot;:8,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:45:17&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:45:17&quot;,&quot;organization&quot;:{&quot;id&quot;:8,&quot;name&quot;:&quot;NCIT&quot;,&quot;created_at&quot;:&quot;2019-07-10 19:31:17&quot;,&quot;updated_at&quot;:&quot;2019-07-10 19:31:17&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="48">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/34">
                              Network Switch |
                              IGMH
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:34,&quot;name&quot;:&quot;Network Switch&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-10-03 13:00:00&quot;,&quot;organization_id&quot;:23,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:06:08&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:06:08&quot;,&quot;organization&quot;:{&quot;id&quot;:23,&quot;name&quot;:&quot;IGMH&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:49:06&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:49:06&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="49">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/35">
                              Network Installation |
                              Jamaluddin School
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:35,&quot;name&quot;:&quot;Network Installation&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-05-04 11:00:00&quot;,&quot;organization_id&quot;:25,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:09:36&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:09:36&quot;,&quot;organization&quot;:{&quot;id&quot;:25,&quot;name&quot;:&quot;Jamaluddin School&quot;,&quot;created_at&quot;:&quot;2019-08-17 21:08:45&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:08:45&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="50">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/37">
                              Furniture for Muhyiddin School Staffroom |
                              Ministry of Education
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:37,&quot;name&quot;:&quot;Furniture for Muhyiddin School Staffroom&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-03-15 13:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:21:40&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:21:40&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="51">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/38">
                              Bicycles and Helmet |
                              Ministry of Environment and Energy
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:38,&quot;name&quot;:&quot;Bicycles and Helmet&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-02-20 12:00:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:25:20&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:25:20&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="52">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/39">
                              Computer System |
                              Maldives Polytechnics
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:39,&quot;name&quot;:&quot;Computer System&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-03-25 13:00:00&quot;,&quot;organization_id&quot;:20,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:27:21&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:28:10&quot;,&quot;organization&quot;:{&quot;id&quot;:20,&quot;name&quot;:&quot;Maldives Polytechnics&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:06:26&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:06:26&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="53">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/40">
                              Projector |
                              Maldives Polytechnics
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:40,&quot;name&quot;:&quot;Projector&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-03-25 13:00:00&quot;,&quot;organization_id&quot;:20,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:29:33&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:29:33&quot;,&quot;organization&quot;:{&quot;id&quot;:20,&quot;name&quot;:&quot;Maldives Polytechnics&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:06:26&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:06:26&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="54">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/42">
                              Outcome Impact Survey |
                              Ministry of Fisheries and Agriculture
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:42,&quot;name&quot;:&quot;Outcome Impact Survey&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-01-22 13:00:00&quot;,&quot;organization_id&quot;:12,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:35:20&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:35:20&quot;,&quot;organization&quot;:{&quot;id&quot;:12,&quot;name&quot;:&quot;Ministry of Fisheries and Agriculture&quot;,&quot;created_at&quot;:&quot;2019-07-25 20:08:04&quot;,&quot;updated_at&quot;:&quot;2019-07-25 20:08:04&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="55">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/43">
                              Vehicles for Eco-Tourism in Addu City |
                              Ministry of Environment and Energy
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:43,&quot;name&quot;:&quot;Vehicles for Eco-Tourism in Addu City&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-03-01 13:00:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:38:11&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:38:11&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="56">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/44">
                              ASA Firewall |
                              NCIT
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:44,&quot;name&quot;:&quot;ASA Firewall&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-02-11 10:00:00&quot;,&quot;organization_id&quot;:8,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:43:04&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:43:04&quot;,&quot;organization&quot;:{&quot;id&quot;:8,&quot;name&quot;:&quot;NCIT&quot;,&quot;created_at&quot;:&quot;2019-07-10 19:31:17&quot;,&quot;updated_at&quot;:&quot;2019-07-10 19:31:17&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="57">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/75">
                              104 Attendance machine |
                              Department of Judicial Administration
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:75,&quot;name&quot;:&quot;104 Attendance machine&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-05-19 12:00:00&quot;,&quot;organization_id&quot;:31,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:31:29&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:31:29&quot;,&quot;organization&quot;:{&quot;id&quot;:31,&quot;name&quot;:&quot;Department of Judicial Administration&quot;,&quot;created_at&quot;:&quot;2019-08-18 04:04:10&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:04:10&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style></td>
                        </tr>
                        <tr data-index="58">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/36">
                              Equipment for Eco-Tourism Facilities |
                              Ministry of Environment and Energy
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:36,&quot;name&quot;:&quot;Equipment for Eco-Tourism Facilities&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:&quot;2018-01-01 00:00:00&quot;,&quot;submission_date&quot;:&quot;2018-02-20 11:00:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:15:21&quot;,&quot;updated_at&quot;:&quot;2019-08-31 05:01:55&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style>01 Jan 2018 - 12:00 am</td>
                        </tr>
                        <tr data-index="59">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/11">
                              Network Cable Upgrade |
                              High Court of Maldives
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:11,&quot;name&quot;:&quot;Network Cable Upgrade&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Network Installation&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:&quot;2019-01-01 00:00:00&quot;,&quot;submission_date&quot;:&quot;2019-07-25 11:00:00&quot;,&quot;organization_id&quot;:10,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-25 17:14:27&quot;,&quot;updated_at&quot;:&quot;2019-08-31 04:47:42&quot;,&quot;organization&quot;:{&quot;id&quot;:10,&quot;name&quot;:&quot;High Court of Maldives&quot;,&quot;created_at&quot;:&quot;2019-07-25 17:13:39&quot;,&quot;updated_at&quot;:&quot;2019-07-25 17:13:39&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style>01 Jan 2019 - 12:00 am</td>
                        </tr>
                        <tr data-index="60">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/14">
                              Cable Supply |
                              Secretariat of Funadhoo Council
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:14,&quot;name&quot;:&quot;Cable Supply&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Electrical cable&quot;,&quot;cost&quot;:579377.81,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:&quot;2019-01-01 00:00:00&quot;,&quot;submission_date&quot;:&quot;2019-07-29 01:00:00&quot;,&quot;organization_id&quot;:14,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-29 21:25:21&quot;,&quot;updated_at&quot;:&quot;2019-08-31 04:48:25&quot;,&quot;organization&quot;:{&quot;id&quot;:14,&quot;name&quot;:&quot;Secretariat of Funadhoo Council&quot;,&quot;created_at&quot;:&quot;2019-07-29 21:22:50&quot;,&quot;updated_at&quot;:&quot;2019-07-29 21:22:50&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style>01 Jan 2019 - 12:00 am</td>
                        </tr>
                        <tr data-index="61">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/13">
                              IP Phone |
                              Ministry of Islamic Affairs
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:13,&quot;name&quot;:&quot;IP Phone&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;IT Equipment&quot;,&quot;cost&quot;:27880,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:&quot;2019-12-31 23:59:00&quot;,&quot;submission_date&quot;:&quot;2019-07-29 10:00:00&quot;,&quot;organization_id&quot;:13,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-28 19:54:00&quot;,&quot;updated_at&quot;:&quot;2019-08-31 04:48:03&quot;,&quot;organization&quot;:{&quot;id&quot;:13,&quot;name&quot;:&quot;Ministry of Islamic Affairs&quot;,&quot;created_at&quot;:&quot;2019-07-28 19:53:05&quot;,&quot;updated_at&quot;:&quot;2019-07-28 19:53:05&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style>31 Dec 2019 - 11:59 pm</td>
                        </tr>
                        <tr data-index="62">
                          <td class="link" style>
                            <a class="btn text-left" href="/bids/48">
                              Meeting Room Furniture |
                              Ministry of Education
                            </a>
                          </td>
                          <td style>
                            <a
                              href
                              data-toggle="modal"
                              data-target="#changeStatusModal"
                              class="badge badge-primary"
                              onclick="changeStatusModal({&quot;id&quot;:48,&quot;name&quot;:&quot;Meeting Room Furniture&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:&quot;2020-01-01 00:00:00&quot;,&quot;submission_date&quot;:&quot;2018-06-21 11:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:54:37&quot;,&quot;updated_at&quot;:&quot;2019-08-31 05:02:20&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                            >Prebid</a>
                          </td>
                          <td style></td>
                          <td style></td>
                          <td style>01 Jan 2020 - 12:00 am</td>
                        </tr>
                      </tbody>
                      <tfoot style="display: none;">
                        <tr></tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="fixed-table-footer">
                    <table>
                      <thead>
                        <tr></tr>
                      </thead>
                    </table>
                  </div>
                </div>
                <div class="fixed-table-pagination" style="display: none;"></div>
              </div>
              <div class="clearfix"></div>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-12 mb-5">
        <div id="accordion" class="card">
          <div class="card-header" data-toggle="collapse" data-target="#status-collapse">
            <h5 class="mb-0">Bids by Status</h5>
          </div>
          <div class="card-body collapse" id="status-collapse" data-parent="#dashboard-cards">
            <ul class="list-group">
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
                data-toggle="collapse"
                data-target="#prebid-collapse"
              >
                Prebid
                <span class="badge badge-primary badge-pill">63</span>
              </li>
              <div id="prebid-collapse" class="collapse" data-parent="#accordion">
                <table class="table table-list">
                  <tbody>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/81">
                          FireFighting Equipment |
                          Ministry of Environment and Energy
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:81,&quot;name&quot;:&quot;FireFighting Equipment&quot;,&quot;iulaan_no&quot;:&quot;(IUL)438-MCEP\/438\/2019\/210&quot;,&quot;link&quot;:&quot;www.gazette.gov.mv\/iulaan\/view\/109029&quot;,&quot;category&quot;:&quot;Equipment&quot;,&quot;cost&quot;:364094.74,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-24 11:00:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-25 18:18:38&quot;,&quot;updated_at&quot;:&quot;2019-08-25 19:04:06&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/61">
                          Other Working materials |
                          National Drug Agency
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:61,&quot;name&quot;:&quot;Other Working materials&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-23 12:00:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:45:13&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:45:13&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/49">
                          550 Tablets |
                          Elections Commission
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:49,&quot;name&quot;:&quot;550 Tablets&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-08-09 14:00:00&quot;,&quot;organization_id&quot;:27,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:58:07&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:58:07&quot;,&quot;organization&quot;:{&quot;id&quot;:27,&quot;name&quot;:&quot;Elections Commission&quot;,&quot;created_at&quot;:&quot;2019-08-17 21:57:36&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:57:36&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/50">
                          TV |
                          Ministry of Education
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:50,&quot;name&quot;:&quot;TV&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Electronics&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-08-05 12:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 22:03:21&quot;,&quot;updated_at&quot;:&quot;2019-08-17 22:03:21&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/51">
                          TV |
                          Ministry of Education
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:51,&quot;name&quot;:&quot;TV&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Electronics&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-07-19 10:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 22:05:03&quot;,&quot;updated_at&quot;:&quot;2019-08-17 22:05:03&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/52">
                          Music Instrument |
                          Ministry of Gender and Family
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:52,&quot;name&quot;:&quot;Music Instrument&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-10-13 10:00:00&quot;,&quot;organization_id&quot;:28,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 22:07:14&quot;,&quot;updated_at&quot;:&quot;2019-08-17 22:07:14&quot;,&quot;organization&quot;:{&quot;id&quot;:28,&quot;name&quot;:&quot;Ministry of Gender and Family&quot;,&quot;created_at&quot;:&quot;2019-08-17 22:06:17&quot;,&quot;updated_at&quot;:&quot;2019-08-17 22:06:17&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/53">
                          N1 School Furniture |
                          Ministry of Education
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:53,&quot;name&quot;:&quot;N1 School Furniture&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-10-10 12:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 22:10:15&quot;,&quot;updated_at&quot;:&quot;2019-08-17 22:10:15&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/54">
                          Bilge Pump |
                          Ministry of Defence
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:54,&quot;name&quot;:&quot;Bilge Pump&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-07-15 10:00:00&quot;,&quot;organization_id&quot;:29,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:26:33&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:26:33&quot;,&quot;organization&quot;:{&quot;id&quot;:29,&quot;name&quot;:&quot;Ministry of Defence&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:25:50&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:25:50&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/55">
                          3 Air Condition |
                          Supreme Court
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:55,&quot;name&quot;:&quot;3 Air Condition&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Air Condition&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-07-02 12:00:00&quot;,&quot;organization_id&quot;:16,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:29:30&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:29:30&quot;,&quot;organization&quot;:{&quot;id&quot;:16,&quot;name&quot;:&quot;Supreme Court&quot;,&quot;created_at&quot;:&quot;2019-07-31 17:22:29&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:06:12&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/56">
                          Furniture Fittings |
                          National Drug Agency
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:56,&quot;name&quot;:&quot;Furniture Fittings&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-23 12:00:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:34:07&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:36:37&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/57">
                          Plant, Machinery and Equipment |
                          National Drug Agency
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:57,&quot;name&quot;:&quot;Plant, Machinery and Equipment&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-23 12:00:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:37:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:37:22&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/58">
                          Plant, Machinery and Equipment |
                          National Drug Agency
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:58,&quot;name&quot;:&quot;Plant, Machinery and Equipment&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-23 12:00:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:39:47&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:39:47&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/59">
                          IT hardware |
                          National Drug Agency
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:59,&quot;name&quot;:&quot;IT hardware&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-23 12:00:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:41:40&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:41:40&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/60">
                          Other items |
                          National Drug Agency
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:60,&quot;name&quot;:&quot;Other items&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-23 12:00:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:42:54&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:42:54&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/62">
                          2 Working Station |
                          National Drug Agency
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:62,&quot;name&quot;:&quot;2 Working Station&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-09-20 11:00:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:51:36&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:51:36&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/47">
                          10 Sound System for MGT Schools |
                          Ministry of Education
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:47,&quot;name&quot;:&quot;10 Sound System for MGT Schools&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-06-11 11:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:51:35&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:51:35&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/63">
                          N1 School Furniture |
                          Ministry of Education
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:63,&quot;name&quot;:&quot;N1 School Furniture&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-10-28 13:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:55:52&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:55:52&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/64">
                          Machinery Supply and Installation |
                          National Drug Agency
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:64,&quot;name&quot;:&quot;Machinery Supply and Installation&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-09-20 11:30:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 03:58:29&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:58:29&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/65">
                          N1 School Furniture |
                          Ministry of Education
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:65,&quot;name&quot;:&quot;N1 School Furniture&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-11-13 10:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:01:23&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:01:23&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/66">
                          N1 School Furniture |
                          Ministry of Education
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:66,&quot;name&quot;:&quot;N1 School Furniture&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-11-13 10:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:02:42&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:02:42&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/67">
                          10 Laptop &amp; 10 Computer system |
                          Department of Judicial Administration
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:67,&quot;name&quot;:&quot;10 Laptop &amp; 10 Computer system&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-11-01 11:00:00&quot;,&quot;organization_id&quot;:31,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:04:54&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:04:54&quot;,&quot;organization&quot;:{&quot;id&quot;:31,&quot;name&quot;:&quot;Department of Judicial Administration&quot;,&quot;created_at&quot;:&quot;2019-08-18 04:04:10&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:04:10&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/68">
                          Flag and Flag post |
                          Ministry of Housing and Infrastructure
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:68,&quot;name&quot;:&quot;Flag and Flag post&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-08-27 14:00:00&quot;,&quot;organization_id&quot;:22,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:08:57&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:08:57&quot;,&quot;organization&quot;:{&quot;id&quot;:22,&quot;name&quot;:&quot;Ministry of Housing and Infrastructure&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:42:02&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:42:02&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/69">
                          AC installation |
                          National Drug Agency
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:69,&quot;name&quot;:&quot;AC installation&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Air Condition&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-09-20 11:30:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:12:06&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:12:06&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/70">
                          Garlando Board |
                          Ministry of Youth and Sports
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:70,&quot;name&quot;:&quot;Garlando Board&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-09-24 11:30:00&quot;,&quot;organization_id&quot;:32,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:15:48&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:15:48&quot;,&quot;organization&quot;:{&quot;id&quot;:32,&quot;name&quot;:&quot;Ministry of Youth and Sports&quot;,&quot;created_at&quot;:&quot;2019-08-18 04:15:05&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:15:05&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/71">
                          Machinery Supply and Installation |
                          National Drug Agency
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:71,&quot;name&quot;:&quot;Machinery Supply and Installation&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-10-02 11:30:00&quot;,&quot;organization_id&quot;:30,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:18:24&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:18:24&quot;,&quot;organization&quot;:{&quot;id&quot;:30,&quot;name&quot;:&quot;National Drug Agency&quot;,&quot;created_at&quot;:&quot;2019-08-18 03:31:22&quot;,&quot;updated_at&quot;:&quot;2019-08-18 03:31:22&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/72">
                          50 Trolley for Hanimadhoo Airport |
                          Regional Airport
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:72,&quot;name&quot;:&quot;50 Trolley for Hanimadhoo Airport&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-07-17 11:00:00&quot;,&quot;organization_id&quot;:2,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:23:00&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:34:33&quot;,&quot;organization&quot;:{&quot;id&quot;:2,&quot;name&quot;:&quot;Regional Airport&quot;,&quot;created_at&quot;:&quot;2019-07-08 20:32:28&quot;,&quot;updated_at&quot;:&quot;2019-07-08 20:32:28&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/73">
                          Furniture Fittings |
                          Ministry of Home Affairs
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:73,&quot;name&quot;:&quot;Furniture Fittings&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-07-09 10:00:00&quot;,&quot;organization_id&quot;:33,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:26:41&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:26:41&quot;,&quot;organization&quot;:{&quot;id&quot;:33,&quot;name&quot;:&quot;Ministry of Home Affairs&quot;,&quot;created_at&quot;:&quot;2019-08-18 04:25:57&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:25:57&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/74">
                          7 Computer Systems |
                          Ministry of Education
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:74,&quot;name&quot;:&quot;7 Computer Systems&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-05-21 11:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:29:25&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:29:25&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/77">
                          ICT equipment supply |
                          Ministry of Environment and Energy
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:77,&quot;name&quot;:&quot;ICT equipment supply&quot;,&quot;iulaan_no&quot;:&quot;(IUL)438-MCEP\/438\/2019\/24&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/108777&quot;,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:387602.72,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-18 13:00:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 19:48:46&quot;,&quot;updated_at&quot;:&quot;2019-08-20 01:06:27&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/46">
                          Provision of Water Supply Facilities |
                          Ministry of Environment and Energy
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:46,&quot;name&quot;:&quot;Provision of Water Supply Facilities&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Consultancy Services&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-01-25 11:30:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:49:44&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:49:44&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/76">
                          Office Partition System |
                          Ministry of Housing and Urban Development
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:76,&quot;name&quot;:&quot;Office Partition System&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-05-21 11:00:00&quot;,&quot;organization_id&quot;:3,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:35:06&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:35:06&quot;,&quot;organization&quot;:{&quot;id&quot;:3,&quot;name&quot;:&quot;Ministry of Housing and Urban Development&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:23:13&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:23:13&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/27">
                          Multi-functional Printer |
                          STELCO
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:27,&quot;name&quot;:&quot;Multi-functional Printer&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-03-27 10:00:00&quot;,&quot;organization_id&quot;:21,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:24:24&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:24:24&quot;,&quot;organization&quot;:{&quot;id&quot;:21,&quot;name&quot;:&quot;STELCO&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:15:28&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:15:28&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/78">
                          Highbay LED light |
                          STELCO
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:78,&quot;name&quot;:&quot;Highbay LED light&quot;,&quot;iulaan_no&quot;:&quot;H-2019\/107&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/109007&quot;,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:91320.96,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-18 10:00:00&quot;,&quot;organization_id&quot;:21,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 19:59:00&quot;,&quot;updated_at&quot;:&quot;2019-08-20 01:04:13&quot;,&quot;organization&quot;:{&quot;id&quot;:21,&quot;name&quot;:&quot;STELCO&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:15:28&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:15:28&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/15">
                          Drone |
                          Ministry of National Planning and Infrastructure
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:15,&quot;name&quot;:&quot;Drone&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Toy&quot;,&quot;cost&quot;:47340,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-27 12:00:00&quot;,&quot;organization_id&quot;:15,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-30 18:42:27&quot;,&quot;updated_at&quot;:&quot;2019-07-30 18:42:27&quot;,&quot;organization&quot;:{&quot;id&quot;:15,&quot;name&quot;:&quot;Ministry of National Planning and Infrastructure&quot;,&quot;created_at&quot;:&quot;2019-07-30 18:37:39&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:41:11&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/16">
                          AC 360000 |
                          Supreme Court
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:16,&quot;name&quot;:&quot;AC 360000&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;AC&quot;,&quot;cost&quot;:335000,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-01 10:00:00&quot;,&quot;organization_id&quot;:16,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-31 17:23:56&quot;,&quot;updated_at&quot;:&quot;2019-07-31 17:23:56&quot;,&quot;organization&quot;:{&quot;id&quot;:16,&quot;name&quot;:&quot;Supreme Court&quot;,&quot;created_at&quot;:&quot;2019-07-31 17:22:29&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:06:12&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/17">
                          IP Phone |
                          Fuel Supply Maldives
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:17,&quot;name&quot;:&quot;IP Phone&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;IT Equipment&quot;,&quot;cost&quot;:129309.6,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-04 11:00:00&quot;,&quot;organization_id&quot;:17,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-04 17:42:28&quot;,&quot;updated_at&quot;:&quot;2019-08-04 17:42:28&quot;,&quot;organization&quot;:{&quot;id&quot;:17,&quot;name&quot;:&quot;Fuel Supply Maldives&quot;,&quot;created_at&quot;:&quot;2019-08-04 17:40:49&quot;,&quot;updated_at&quot;:&quot;2019-08-04 17:40:49&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/19">
                          Graphics Card |
                          NCIT
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:19,&quot;name&quot;:&quot;Graphics Card&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;IT Equipment&quot;,&quot;cost&quot;:29824,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-08 11:00:00&quot;,&quot;organization_id&quot;:8,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-08 17:41:01&quot;,&quot;updated_at&quot;:&quot;2019-08-08 17:41:01&quot;,&quot;organization&quot;:{&quot;id&quot;:8,&quot;name&quot;:&quot;NCIT&quot;,&quot;created_at&quot;:&quot;2019-07-10 19:31:17&quot;,&quot;updated_at&quot;:&quot;2019-07-10 19:31:17&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/20">
                          IP phone |
                          Addu City Council
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:20,&quot;name&quot;:&quot;IP phone&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:222378.4,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-08 14:00:00&quot;,&quot;organization_id&quot;:26,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-10 04:11:17&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:34:10&quot;,&quot;organization&quot;:{&quot;id&quot;:26,&quot;name&quot;:&quot;Addu City Council&quot;,&quot;created_at&quot;:&quot;2019-08-17 21:31:35&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:31:35&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/21">
                          Waste Management Center |
                          Ministry of Environment and Energy
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:21,&quot;name&quot;:&quot;Waste Management Center&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Construction&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-02-01 11:00:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 19:52:25&quot;,&quot;updated_at&quot;:&quot;2019-08-17 19:52:25&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/22">
                          3M Security Strips |
                          Maldives National University
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:22,&quot;name&quot;:&quot;3M Security Strips&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-01-23 11:00:00&quot;,&quot;organization_id&quot;:19,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:01:46&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:01:46&quot;,&quot;organization&quot;:{&quot;id&quot;:19,&quot;name&quot;:&quot;Maldives National University&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:00:46&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:00:46&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/23">
                          15 Sound System |
                          Ministry of Education
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:23,&quot;name&quot;:&quot;15 Sound System&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-04-16 11:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:03:39&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:03:39&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/24">
                          6 Air Condition Installation |
                          Maldives Polytechnics
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:24,&quot;name&quot;:&quot;6 Air Condition Installation&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Electronics&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-04-02 10:00:00&quot;,&quot;organization_id&quot;:20,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:07:48&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:07:48&quot;,&quot;organization&quot;:{&quot;id&quot;:20,&quot;name&quot;:&quot;Maldives Polytechnics&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:06:26&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:06:26&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/25">
                          10 TV MGT School |
                          Ministry of Education
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:25,&quot;name&quot;:&quot;10 TV MGT School&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Electronics&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-11 11:30:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:10:07&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:10:07&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/26">
                          Receipt Printing Device |
                          STELCO
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:26,&quot;name&quot;:&quot;Receipt Printing Device&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Electronics&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-03-27 10:00:00&quot;,&quot;organization_id&quot;:21,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:16:31&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:16:31&quot;,&quot;organization&quot;:{&quot;id&quot;:21,&quot;name&quot;:&quot;STELCO&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:15:28&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:15:28&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/28">
                          PoE Network Switch |
                          STELCO
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:28,&quot;name&quot;:&quot;PoE Network Switch&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-03-27 11:00:00&quot;,&quot;organization_id&quot;:21,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:34:20&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:34:20&quot;,&quot;organization&quot;:{&quot;id&quot;:21,&quot;name&quot;:&quot;STELCO&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:15:28&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:15:28&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/45">
                          Materials for Engineering course |
                          Maldives Polytechnics
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:45,&quot;name&quot;:&quot;Materials for Engineering course&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-02-18 13:00:00&quot;,&quot;organization_id&quot;:20,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:46:32&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:46:32&quot;,&quot;organization&quot;:{&quot;id&quot;:20,&quot;name&quot;:&quot;Maldives Polytechnics&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:06:26&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:06:26&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/29">
                          Aluminium Sheet |
                          Ministry of Housing and Infrastructure
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:29,&quot;name&quot;:&quot;Aluminium Sheet&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Construction Material&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2016-12-13 10:00:00&quot;,&quot;organization_id&quot;:22,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:43:11&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:43:11&quot;,&quot;organization&quot;:{&quot;id&quot;:22,&quot;name&quot;:&quot;Ministry of Housing and Infrastructure&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:42:02&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:42:02&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/30">
                          Media Converter |
                          NCIT
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:30,&quot;name&quot;:&quot;Media Converter&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-02-11 10:15:00&quot;,&quot;organization_id&quot;:8,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:45:17&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:45:17&quot;,&quot;organization&quot;:{&quot;id&quot;:8,&quot;name&quot;:&quot;NCIT&quot;,&quot;created_at&quot;:&quot;2019-07-10 19:31:17&quot;,&quot;updated_at&quot;:&quot;2019-07-10 19:31:17&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/34">
                          Network Switch |
                          IGMH
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:34,&quot;name&quot;:&quot;Network Switch&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-10-03 13:00:00&quot;,&quot;organization_id&quot;:23,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:06:08&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:06:08&quot;,&quot;organization&quot;:{&quot;id&quot;:23,&quot;name&quot;:&quot;IGMH&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:49:06&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:49:06&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/35">
                          Network Installation |
                          Jamaluddin School
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:35,&quot;name&quot;:&quot;Network Installation&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-05-04 11:00:00&quot;,&quot;organization_id&quot;:25,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:09:36&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:09:36&quot;,&quot;organization&quot;:{&quot;id&quot;:25,&quot;name&quot;:&quot;Jamaluddin School&quot;,&quot;created_at&quot;:&quot;2019-08-17 21:08:45&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:08:45&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/37">
                          Furniture for Muhyiddin School Staffroom |
                          Ministry of Education
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:37,&quot;name&quot;:&quot;Furniture for Muhyiddin School Staffroom&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-03-15 13:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:21:40&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:21:40&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/38">
                          Bicycles and Helmet |
                          Ministry of Environment and Energy
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:38,&quot;name&quot;:&quot;Bicycles and Helmet&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-02-20 12:00:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:25:20&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:25:20&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/39">
                          Computer System |
                          Maldives Polytechnics
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:39,&quot;name&quot;:&quot;Computer System&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-03-25 13:00:00&quot;,&quot;organization_id&quot;:20,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:27:21&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:28:10&quot;,&quot;organization&quot;:{&quot;id&quot;:20,&quot;name&quot;:&quot;Maldives Polytechnics&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:06:26&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:06:26&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/40">
                          Projector |
                          Maldives Polytechnics
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:40,&quot;name&quot;:&quot;Projector&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-03-25 13:00:00&quot;,&quot;organization_id&quot;:20,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:29:33&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:29:33&quot;,&quot;organization&quot;:{&quot;id&quot;:20,&quot;name&quot;:&quot;Maldives Polytechnics&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:06:26&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:06:26&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/42">
                          Outcome Impact Survey |
                          Ministry of Fisheries and Agriculture
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:42,&quot;name&quot;:&quot;Outcome Impact Survey&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-01-22 13:00:00&quot;,&quot;organization_id&quot;:12,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:35:20&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:35:20&quot;,&quot;organization&quot;:{&quot;id&quot;:12,&quot;name&quot;:&quot;Ministry of Fisheries and Agriculture&quot;,&quot;created_at&quot;:&quot;2019-07-25 20:08:04&quot;,&quot;updated_at&quot;:&quot;2019-07-25 20:08:04&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/43">
                          Vehicles for Eco-Tourism in Addu City |
                          Ministry of Environment and Energy
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:43,&quot;name&quot;:&quot;Vehicles for Eco-Tourism in Addu City&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-03-01 13:00:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:38:11&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:38:11&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/44">
                          ASA Firewall |
                          NCIT
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:44,&quot;name&quot;:&quot;ASA Firewall&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-02-11 10:00:00&quot;,&quot;organization_id&quot;:8,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:43:04&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:43:04&quot;,&quot;organization&quot;:{&quot;id&quot;:8,&quot;name&quot;:&quot;NCIT&quot;,&quot;created_at&quot;:&quot;2019-07-10 19:31:17&quot;,&quot;updated_at&quot;:&quot;2019-07-10 19:31:17&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/75">
                          104 Attendance machine |
                          Department of Judicial Administration
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:75,&quot;name&quot;:&quot;104 Attendance machine&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-05-19 12:00:00&quot;,&quot;organization_id&quot;:31,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-18 04:31:29&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:31:29&quot;,&quot;organization&quot;:{&quot;id&quot;:31,&quot;name&quot;:&quot;Department of Judicial Administration&quot;,&quot;created_at&quot;:&quot;2019-08-18 04:04:10&quot;,&quot;updated_at&quot;:&quot;2019-08-18 04:04:10&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/36">
                          Equipment for Eco-Tourism Facilities |
                          Ministry of Environment and Energy
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:36,&quot;name&quot;:&quot;Equipment for Eco-Tourism Facilities&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Materials&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:&quot;2018-01-01 00:00:00&quot;,&quot;submission_date&quot;:&quot;2018-02-20 11:00:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:15:21&quot;,&quot;updated_at&quot;:&quot;2019-08-31 05:01:55&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/11">
                          Network Cable Upgrade |
                          High Court of Maldives
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:11,&quot;name&quot;:&quot;Network Cable Upgrade&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Network Installation&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:&quot;2019-01-01 00:00:00&quot;,&quot;submission_date&quot;:&quot;2019-07-25 11:00:00&quot;,&quot;organization_id&quot;:10,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-25 17:14:27&quot;,&quot;updated_at&quot;:&quot;2019-08-31 04:47:42&quot;,&quot;organization&quot;:{&quot;id&quot;:10,&quot;name&quot;:&quot;High Court of Maldives&quot;,&quot;created_at&quot;:&quot;2019-07-25 17:13:39&quot;,&quot;updated_at&quot;:&quot;2019-07-25 17:13:39&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/14">
                          Cable Supply |
                          Secretariat of Funadhoo Council
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:14,&quot;name&quot;:&quot;Cable Supply&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Electrical cable&quot;,&quot;cost&quot;:579377.81,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:&quot;2019-01-01 00:00:00&quot;,&quot;submission_date&quot;:&quot;2019-07-29 01:00:00&quot;,&quot;organization_id&quot;:14,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-29 21:25:21&quot;,&quot;updated_at&quot;:&quot;2019-08-31 04:48:25&quot;,&quot;organization&quot;:{&quot;id&quot;:14,&quot;name&quot;:&quot;Secretariat of Funadhoo Council&quot;,&quot;created_at&quot;:&quot;2019-07-29 21:22:50&quot;,&quot;updated_at&quot;:&quot;2019-07-29 21:22:50&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/13">
                          IP Phone |
                          Ministry of Islamic Affairs
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:13,&quot;name&quot;:&quot;IP Phone&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;IT Equipment&quot;,&quot;cost&quot;:27880,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:&quot;2019-12-31 23:59:00&quot;,&quot;submission_date&quot;:&quot;2019-07-29 10:00:00&quot;,&quot;organization_id&quot;:13,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-28 19:54:00&quot;,&quot;updated_at&quot;:&quot;2019-08-31 04:48:03&quot;,&quot;organization&quot;:{&quot;id&quot;:13,&quot;name&quot;:&quot;Ministry of Islamic Affairs&quot;,&quot;created_at&quot;:&quot;2019-07-28 19:53:05&quot;,&quot;updated_at&quot;:&quot;2019-07-28 19:53:05&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/48">
                          Meeting Room Furniture |
                          Ministry of Education
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-primary"
                          onclick="changeStatusModal({&quot;id&quot;:48,&quot;name&quot;:&quot;Meeting Room Furniture&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:&quot;2020-01-01 00:00:00&quot;,&quot;submission_date&quot;:&quot;2018-06-21 11:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;prebid&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:54:37&quot;,&quot;updated_at&quot;:&quot;2019-08-31 05:02:20&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                        >Prebid</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
                data-toggle="collapse"
                data-target="#pending_proposal-collapse"
              >
                Pending proposal
                <span class="badge badge-primary badge-pill">1</span>
              </li>
              <div id="pending_proposal-collapse" class="collapse" data-parent="#accordion">
                <table class="table table-list">
                  <tbody>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/80">
                          Harddisk Supply |
                          Elections Commission
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-warning"
                          onclick="changeStatusModal({&quot;id&quot;:80,&quot;name&quot;:&quot;Harddisk Supply&quot;,&quot;iulaan_no&quot;:&quot;(A)DC-2019\/213&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/108943&quot;,&quot;category&quot;:&quot;ICT Equipment&quot;,&quot;cost&quot;:58016.04,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-22 11:00:00&quot;,&quot;organization_id&quot;:27,&quot;status_id&quot;:&quot;pending_proposal&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-22 18:21:41&quot;,&quot;updated_at&quot;:&quot;2019-09-28 14:47:33&quot;,&quot;status_color&quot;:&quot;warning&quot;,&quot;organization&quot;:{&quot;id&quot;:27,&quot;name&quot;:&quot;Elections Commission&quot;,&quot;created_at&quot;:&quot;2019-08-17 21:57:36&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:57:36&quot;}})"
                        >Pending proposal</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
                data-toggle="collapse"
                data-target="#ready_for_submission-collapse"
              >
                Ready for submission
                <span class="badge badge-primary badge-pill">4</span>
              </li>
              <div id="ready_for_submission-collapse" class="collapse" data-parent="#accordion">
                <table class="table table-list">
                  <tbody>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/10">
                          Electrical wiring |
                          Cricket Board of Maldives
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-success"
                          onclick="changeStatusModal({&quot;id&quot;:10,&quot;name&quot;:&quot;Electrical wiring&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Electrical works&quot;,&quot;cost&quot;:158006,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:&quot;2019-08-01 00:00:00&quot;,&quot;submission_date&quot;:&quot;2019-07-11 11:00:00&quot;,&quot;organization_id&quot;:9,&quot;status_id&quot;:&quot;ready_for_submission&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-11 17:40:48&quot;,&quot;updated_at&quot;:&quot;2019-09-01 06:13:44&quot;,&quot;status_color&quot;:&quot;success&quot;,&quot;organization&quot;:{&quot;id&quot;:9,&quot;name&quot;:&quot;Cricket Board of Maldives&quot;,&quot;created_at&quot;:&quot;2019-07-11 17:38:27&quot;,&quot;updated_at&quot;:&quot;2019-07-11 17:38:27&quot;}})"
                        >Ready for submission</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/83">
                          Health Furniture - Abduh-Samad Memorial Hospital |
                          Ministry of Health
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-success"
                          onclick="changeStatusModal({&quot;id&quot;:83,&quot;name&quot;:&quot;Health Furniture - Abduh-Samad Memorial Hospital&quot;,&quot;iulaan_no&quot;:&quot;ASMH\/MSS\/IUL\/2019\/05&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/109278&quot;,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:411400.33,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-26 10:00:00&quot;,&quot;organization_id&quot;:35,&quot;status_id&quot;:&quot;ready_for_submission&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-26 18:28:41&quot;,&quot;updated_at&quot;:&quot;2019-09-28 13:16:12&quot;,&quot;status_color&quot;:&quot;success&quot;,&quot;organization&quot;:{&quot;id&quot;:35,&quot;name&quot;:&quot;Ministry of Health&quot;,&quot;created_at&quot;:&quot;2019-08-26 18:24:18&quot;,&quot;updated_at&quot;:&quot;2019-08-26 18:24:18&quot;}})"
                        >Ready for submission</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/84">
                          Health Furniture - Kulhudhuhfushi Regional Hospital |
                          Ministry of Health
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-success"
                          onclick="changeStatusModal({&quot;id&quot;:84,&quot;name&quot;:&quot;Health Furniture - Kulhudhuhfushi Regional Hospital&quot;,&quot;iulaan_no&quot;:&quot;(IUL)KRH-PLD\/2019\/14&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/109318&quot;,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:447879.49,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-26 10:00:00&quot;,&quot;organization_id&quot;:35,&quot;status_id&quot;:&quot;ready_for_submission&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-26 18:50:07&quot;,&quot;updated_at&quot;:&quot;2019-09-28 13:15:37&quot;,&quot;status_color&quot;:&quot;success&quot;,&quot;organization&quot;:{&quot;id&quot;:35,&quot;name&quot;:&quot;Ministry of Health&quot;,&quot;created_at&quot;:&quot;2019-08-26 18:24:18&quot;,&quot;updated_at&quot;:&quot;2019-08-26 18:24:18&quot;}})"
                        >Ready for submission</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/86">
                          MRC server |
                          Ministry of Fisheries and Agriculture
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-success"
                          onclick="changeStatusModal({&quot;id&quot;:86,&quot;name&quot;:&quot;MRC server&quot;,&quot;iulaan_no&quot;:&quot;(IUL)30\/3002019\/174&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/109767&quot;,&quot;category&quot;:&quot;IT Equipment&quot;,&quot;cost&quot;:70720,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-26 11:00:00&quot;,&quot;organization_id&quot;:12,&quot;status_id&quot;:&quot;ready_for_submission&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-26 19:57:39&quot;,&quot;updated_at&quot;:&quot;2019-09-28 14:35:38&quot;,&quot;status_color&quot;:&quot;success&quot;,&quot;organization&quot;:{&quot;id&quot;:12,&quot;name&quot;:&quot;Ministry of Fisheries and Agriculture&quot;,&quot;created_at&quot;:&quot;2019-07-25 20:08:04&quot;,&quot;updated_at&quot;:&quot;2019-07-25 20:08:04&quot;}})"
                        >Ready for submission</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
                data-toggle="collapse"
                data-target="#pending_agreement-collapse"
              >
                Pending agreement
                <span class="badge badge-primary badge-pill">1</span>
              </li>
              <div id="pending_agreement-collapse" class="collapse" data-parent="#accordion">
                <table class="table table-list">
                  <tbody>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/88">
                          NAS |
                          Public Service Media
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-danger"
                          onclick="changeStatusModal({&quot;id&quot;:88,&quot;name&quot;:&quot;NAS&quot;,&quot;iulaan_no&quot;:&quot;(IUL) PSM-FP\/ PSM\/2019\/70&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/110262&quot;,&quot;category&quot;:&quot;IT Equipment&quot;,&quot;cost&quot;:81960,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-29 14:00:00&quot;,&quot;organization_id&quot;:36,&quot;status_id&quot;:&quot;pending_agreement&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-29 20:23:24&quot;,&quot;updated_at&quot;:&quot;2019-09-11 17:20:43&quot;,&quot;remaining_days&quot;:&quot;Set Agreement Date &amp; Duration&quot;,&quot;organization&quot;:{&quot;id&quot;:36,&quot;name&quot;:&quot;Public Service Media&quot;,&quot;created_at&quot;:&quot;2019-08-29 20:21:33&quot;,&quot;updated_at&quot;:&quot;2019-08-29 20:21:33&quot;}})"
                        >Pending agreement</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
                data-toggle="collapse"
                data-target="#completed-collapse"
              >
                Completed
                <span class="badge badge-primary badge-pill">3</span>
              </li>
              <div id="completed-collapse" class="collapse" data-parent="#accordion">
                <table class="table table-list">
                  <tbody>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/5">
                          Ba. Kamadhoo Kuni Manage kuraa Marukazu Gaaim Kurun |
                          Ministry of Environment and Energy
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-success"
                          onclick="changeStatusModal({&quot;id&quot;:5,&quot;name&quot;:&quot;Ba. Kamadhoo Kuni Manage kuraa Marukazu Gaaim Kurun&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Waste Management, Construction&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:&quot;{\r\n  \&quot;items\&quot;: [\r\n{\r\n\&quot;description\&quot;: 1,\r\n  \&quot;qty\&quot;: 1,\r\n  \&quot;rate_(exc_gst)\&quot;: \&quot;delectus aut autem\&quot;,\r\n  \&quot;total\&quot;: false},\r\n{\r\n\&quot;description\&quot;: 2,\r\n  \&quot;qty\&quot;: 10,\r\n  \&quot;rate_(exc_gst)\&quot;: \&quot;delectus aut autem\&quot;,\r\n  \&quot;total\&quot;: false},\r\n{\r\n\&quot;description\&quot;: 4,\r\n  \&quot;qty\&quot;: 123,\r\n  \&quot;rate_(exc_gst)\&quot;: \&quot;delectus aut autem\&quot;,\r\n  \&quot;total\&quot;: false}\r\n]\r\n}&quot;,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:&quot;2019-08-29 00:00:00&quot;,&quot;submission_date&quot;:&quot;2019-11-01 00:00:00&quot;,&quot;organization_id&quot;:5,&quot;status_id&quot;:&quot;completed&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-04 18:19:07&quot;,&quot;updated_at&quot;:&quot;2019-09-28 14:47:44&quot;,&quot;organization&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Ministry of Environment and Energy&quot;,&quot;created_at&quot;:&quot;2019-07-04 18:10:37&quot;,&quot;updated_at&quot;:&quot;2019-07-04 18:10:37&quot;}})"
                        >Completed</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/31">
                          Barcode Printer |
                          IGMH
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-success"
                          onclick="changeStatusModal({&quot;id&quot;:31,&quot;name&quot;:&quot;Barcode Printer&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-06-06 00:00:00&quot;,&quot;organization_id&quot;:23,&quot;status_id&quot;:&quot;completed&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:51:57&quot;,&quot;updated_at&quot;:&quot;2019-08-30 04:32:16&quot;,&quot;organization&quot;:{&quot;id&quot;:23,&quot;name&quot;:&quot;IGMH&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:49:06&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:49:06&quot;}})"
                        >Completed</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/32">
                          Hardisk |
                          IGMH
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-success"
                          onclick="changeStatusModal({&quot;id&quot;:32,&quot;name&quot;:&quot;Hardisk&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;ICT equipment&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-07-24 13:00:00&quot;,&quot;organization_id&quot;:23,&quot;status_id&quot;:&quot;completed&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 20:59:31&quot;,&quot;updated_at&quot;:&quot;2019-08-30 04:33:55&quot;,&quot;organization&quot;:{&quot;id&quot;:23,&quot;name&quot;:&quot;IGMH&quot;,&quot;created_at&quot;:&quot;2019-08-17 20:49:06&quot;,&quot;updated_at&quot;:&quot;2019-08-17 20:49:06&quot;}})"
                        >Completed</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
                data-toggle="collapse"
                data-target="#lost-collapse"
              >
                Lost
                <span class="badge badge-primary badge-pill">10</span>
              </li>
              <div id="lost-collapse" class="collapse" data-parent="#accordion">
                <table class="table table-list">
                  <tbody>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/3">
                          N1 School Furniture |
                          Ministry of Education
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-dark"
                          onclick="changeStatusModal({&quot;id&quot;:3,&quot;name&quot;:&quot;N1 School Furniture&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:1000000,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-11-08 00:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;lost&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-06-19 19:28:15&quot;,&quot;updated_at&quot;:&quot;2019-08-27 21:03:40&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                        >Lost</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/2">
                          Airport Bench 100 |
                          Regional Airport
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-dark"
                          onclick="changeStatusModal({&quot;id&quot;:2,&quot;name&quot;:&quot;Airport Bench 100&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Airport&quot;,&quot;cost&quot;:103132.7,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-17 00:00:00&quot;,&quot;organization_id&quot;:2,&quot;status_id&quot;:&quot;lost&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-06-19 18:59:05&quot;,&quot;updated_at&quot;:&quot;2019-08-29 01:37:42&quot;,&quot;organization&quot;:{&quot;id&quot;:2,&quot;name&quot;:&quot;Regional Airport&quot;,&quot;created_at&quot;:&quot;2019-07-08 20:32:28&quot;,&quot;updated_at&quot;:&quot;2019-07-08 20:32:28&quot;}})"
                        >Lost</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/4">
                          N1 School Furniture |
                          Ministry of Education
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-dark"
                          onclick="changeStatusModal({&quot;id&quot;:4,&quot;name&quot;:&quot;N1 School Furniture&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:2000000,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2018-10-28 00:00:00&quot;,&quot;organization_id&quot;:4,&quot;status_id&quot;:&quot;lost&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-06-19 19:31:44&quot;,&quot;updated_at&quot;:&quot;2019-08-30 04:30:26&quot;,&quot;organization&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Ministry of Education&quot;,&quot;created_at&quot;:&quot;2019-06-19 19:27:07&quot;,&quot;updated_at&quot;:&quot;2019-06-19 19:27:07&quot;}})"
                        >Lost</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/7">
                          100 Trolly Kulhudhuhfishi/Funadhoo |
                          Regional Airport
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-dark"
                          onclick="changeStatusModal({&quot;id&quot;:7,&quot;name&quot;:&quot;100 Trolly Kulhudhuhfishi\/Funadhoo&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Airport&quot;,&quot;cost&quot;:243455.75,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-06-17 11:00:00&quot;,&quot;organization_id&quot;:2,&quot;status_id&quot;:&quot;lost&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-10 17:29:28&quot;,&quot;updated_at&quot;:&quot;2019-08-30 04:30:45&quot;,&quot;organization&quot;:{&quot;id&quot;:2,&quot;name&quot;:&quot;Regional Airport&quot;,&quot;created_at&quot;:&quot;2019-07-08 20:32:28&quot;,&quot;updated_at&quot;:&quot;2019-07-08 20:32:28&quot;}})"
                        >Lost</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/8">
                          Media Converter |
                          NCIT
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-dark"
                          onclick="changeStatusModal({&quot;id&quot;:8,&quot;name&quot;:&quot;Media Converter&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;IT Equipment&quot;,&quot;cost&quot;:21777.5,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-07-10 13:00:00&quot;,&quot;organization_id&quot;:8,&quot;status_id&quot;:&quot;lost&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-10 19:34:03&quot;,&quot;updated_at&quot;:&quot;2019-08-30 04:30:15&quot;,&quot;organization&quot;:{&quot;id&quot;:8,&quot;name&quot;:&quot;NCIT&quot;,&quot;created_at&quot;:&quot;2019-07-10 19:31:17&quot;,&quot;updated_at&quot;:&quot;2019-07-10 19:31:17&quot;}})"
                        >Lost</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/9">
                          50 Trolley Hanimaadhoo |
                          Regional Airport
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-dark"
                          onclick="changeStatusModal({&quot;id&quot;:9,&quot;name&quot;:&quot;50 Trolley Hanimaadhoo&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Airport&quot;,&quot;cost&quot;:159251.44,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-05-27 11:00:00&quot;,&quot;organization_id&quot;:2,&quot;status_id&quot;:&quot;lost&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-10 20:24:38&quot;,&quot;updated_at&quot;:&quot;2019-09-28 14:35:55&quot;,&quot;organization&quot;:{&quot;id&quot;:2,&quot;name&quot;:&quot;Regional Airport&quot;,&quot;created_at&quot;:&quot;2019-07-08 20:32:28&quot;,&quot;updated_at&quot;:&quot;2019-07-08 20:32:28&quot;}})"
                        >Lost</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/33">
                          Building Valuation |
                          Center for Islamic Finance
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-dark"
                          onclick="changeStatusModal({&quot;id&quot;:33,&quot;name&quot;:&quot;Building Valuation&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Construction&quot;,&quot;cost&quot;:0,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2017-11-09 14:00:00&quot;,&quot;organization_id&quot;:24,&quot;status_id&quot;:&quot;lost&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-17 21:02:54&quot;,&quot;updated_at&quot;:&quot;2019-08-30 04:32:51&quot;,&quot;organization&quot;:{&quot;id&quot;:24,&quot;name&quot;:&quot;Center for Islamic Finance&quot;,&quot;created_at&quot;:&quot;2019-08-17 21:02:00&quot;,&quot;updated_at&quot;:&quot;2019-08-17 21:02:00&quot;}})"
                        >Lost</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/82">
                          Network Installation |
                          Fahi Dhiriulhun Corporation (FDC)
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-dark"
                          onclick="changeStatusModal({&quot;id&quot;:82,&quot;name&quot;:&quot;Network Installation&quot;,&quot;iulaan_no&quot;:&quot;FDC-IUL\/2019\/11&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/109534&quot;,&quot;category&quot;:&quot;Networking&quot;,&quot;cost&quot;:20000,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-26 10:00:00&quot;,&quot;organization_id&quot;:34,&quot;status_id&quot;:&quot;lost&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-26 16:22:31&quot;,&quot;updated_at&quot;:&quot;2019-09-28 14:36:04&quot;,&quot;organization&quot;:{&quot;id&quot;:34,&quot;name&quot;:&quot;Fahi Dhiriulhun Corporation (FDC)&quot;,&quot;created_at&quot;:&quot;2019-08-26 16:19:11&quot;,&quot;updated_at&quot;:&quot;2019-08-26 16:19:11&quot;}})"
                        >Lost</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/85">
                          Health Furniture - Ungoofaaru regional Hospital |
                          Ministry of Health
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-dark"
                          onclick="changeStatusModal({&quot;id&quot;:85,&quot;name&quot;:&quot;Health Furniture - Ungoofaaru regional Hospital&quot;,&quot;iulaan_no&quot;:&quot;(A)A-2019\/05&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/109297&quot;,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:361386.79,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-26 10:00:00&quot;,&quot;organization_id&quot;:35,&quot;status_id&quot;:&quot;lost&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-26 18:58:18&quot;,&quot;updated_at&quot;:&quot;2019-08-27 00:32:03&quot;,&quot;organization&quot;:{&quot;id&quot;:35,&quot;name&quot;:&quot;Ministry of Health&quot;,&quot;created_at&quot;:&quot;2019-08-26 18:24:18&quot;,&quot;updated_at&quot;:&quot;2019-08-26 18:24:18&quot;}})"
                        >Lost</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/87">
                          FireWall |
                          Ministry of Health
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-dark"
                          onclick="changeStatusModal({&quot;id&quot;:87,&quot;name&quot;:&quot;FireWall&quot;,&quot;iulaan_no&quot;:&quot;(IUL)23-AP\/23\/2019\/279&quot;,&quot;link&quot;:&quot;http:\/\/www.gazette.gov.mv\/iulaan\/view\/109778&quot;,&quot;category&quot;:&quot;IT Equipment&quot;,&quot;cost&quot;:1219244.4,&quot;duration&quot;:null,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:&quot;2019-01-01 00:00:00&quot;,&quot;registration_end_date&quot;:&quot;2019-01-08 00:00:00&quot;,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-28 12:00:00&quot;,&quot;organization_id&quot;:35,&quot;status_id&quot;:&quot;lost&quot;,&quot;agreement_date&quot;:null,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-28 18:40:12&quot;,&quot;updated_at&quot;:&quot;2019-09-28 14:59:12&quot;,&quot;organization&quot;:{&quot;id&quot;:35,&quot;name&quot;:&quot;Ministry of Health&quot;,&quot;created_at&quot;:&quot;2019-08-26 18:24:18&quot;,&quot;updated_at&quot;:&quot;2019-08-26 18:24:18&quot;}})"
                        >Lost</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
                data-toggle="collapse"
                data-target="#dropped_-_cancelled-collapse"
              >
                Dropped / cancelled
                <span class="badge badge-primary badge-pill">3</span>
              </li>
              <div id="dropped_-_cancelled-collapse" class="collapse" data-parent="#accordion">
                <table class="table table-list">
                  <tbody>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/6">
                          FFFP 6% |
                          Regional Airport
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-light"
                          onclick="changeStatusModal({&quot;id&quot;:6,&quot;name&quot;:&quot;FFFP 6%&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;Chemicals&quot;,&quot;cost&quot;:0,&quot;duration&quot;:10,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:&quot;2019-08-28 00:00:00&quot;,&quot;submission_date&quot;:&quot;2019-07-03 13:30:00&quot;,&quot;organization_id&quot;:2,&quot;status_id&quot;:&quot;dropped_\/_cancelled&quot;,&quot;agreement_date&quot;:&quot;2019-08-27 00:00:00&quot;,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-08 19:23:48&quot;,&quot;updated_at&quot;:&quot;2019-09-28 14:27:43&quot;,&quot;organization&quot;:{&quot;id&quot;:2,&quot;name&quot;:&quot;Regional Airport&quot;,&quot;created_at&quot;:&quot;2019-07-08 20:32:28&quot;,&quot;updated_at&quot;:&quot;2019-07-08 20:32:28&quot;}})"
                        >Dropped / cancelled</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/12">
                          SIP Phone |
                          Ministry of Fisheries and Agriculture
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-light"
                          onclick="changeStatusModal({&quot;id&quot;:12,&quot;name&quot;:&quot;SIP Phone&quot;,&quot;iulaan_no&quot;:null,&quot;link&quot;:null,&quot;category&quot;:&quot;IT Equipment&quot;,&quot;cost&quot;:149992.5,&quot;duration&quot;:94,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-07-25 12:00:00&quot;,&quot;organization_id&quot;:12,&quot;status_id&quot;:&quot;dropped_\/_cancelled&quot;,&quot;agreement_date&quot;:&quot;2019-05-27 00:00:00&quot;,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-07-25 20:09:45&quot;,&quot;updated_at&quot;:&quot;2019-09-05 14:11:37&quot;,&quot;organization&quot;:{&quot;id&quot;:12,&quot;name&quot;:&quot;Ministry of Fisheries and Agriculture&quot;,&quot;created_at&quot;:&quot;2019-07-25 20:08:04&quot;,&quot;updated_at&quot;:&quot;2019-07-25 20:08:04&quot;}})"
                        >Dropped / cancelled</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="link">
                        <a class="btn text-left" href="/bids/18">
                          Mobile File Rack |
                          President's Office
                        </a>
                      </td>
                      <td>
                        <a
                          href
                          data-toggle="modal"
                          data-target="#changeStatusModal"
                          class="badge badge-light"
                          onclick="changeStatusModal({&quot;id&quot;:18,&quot;name&quot;:&quot;Mobile File Rack&quot;,&quot;iulaan_no&quot;:&quot;(iul)123\\43234\\345\\&quot;,&quot;link&quot;:null,&quot;category&quot;:&quot;Furniture&quot;,&quot;cost&quot;:12294,&quot;duration&quot;:10,&quot;estimate&quot;:null,&quot;registration_start_date&quot;:null,&quot;registration_end_date&quot;:null,&quot;info_date&quot;:null,&quot;submission_date&quot;:&quot;2019-08-08 10:00:00&quot;,&quot;organization_id&quot;:18,&quot;status_id&quot;:&quot;dropped_\/_cancelled&quot;,&quot;agreement_date&quot;:&quot;2019-01-07 00:00:00&quot;,&quot;extended_date&quot;:null,&quot;created_at&quot;:&quot;2019-08-08 04:23:16&quot;,&quot;updated_at&quot;:&quot;2019-09-28 14:27:36&quot;,&quot;organization&quot;:{&quot;id&quot;:18,&quot;name&quot;:&quot;President's Office&quot;,&quot;created_at&quot;:&quot;2019-08-08 04:22:09&quot;,&quot;updated_at&quot;:&quot;2019-08-08 04:22:09&quot;}})"
                        >Dropped / cancelled</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </ul>
          </div>
        </div>
      </div>

      <div class="modal" tabindex="-1" role="dialog" id="changeStatusModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <form method="POST">
              <input type="hidden" name="_token" value="iGGEqVwnVEUQ7ypNDfDQJiYli0V8CrcyH604apu5" />
              <input type="hidden" name="_method" value="patch" />
              <input type="hidden" name="redirect" value="/dashboard" />

              <div class="modal-header">
                <h5 class="modal-title">Change Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>

              <div class="modal-body">
                <input type="hidden" name="_token" value="iGGEqVwnVEUQ7ypNDfDQJiYli0V8CrcyH604apu5" />
                <div class="row">
                  <div class="form-group col">
                    <select class="form-control" name="status_id">
                      <option value="prebid">Prebid</option>
                      <option value="pending_estimate">Pending estimate</option>
                      <option value="pending_proposal">Pending proposal</option>
                      <option value="ready_for_submission">Ready for submission</option>
                      <option value="pending_evaluation">Pending evaluation</option>
                      <option value="pending_agreement">Pending agreement</option>
                      <option value="ongoing">Ongoing</option>
                      <option value="pending_payment">Pending payment</option>
                      <option value="completed">Completed</option>
                      <option value="lost">Lost</option>
                      <option value="dropped_/_cancelled">Dropped / cancelled</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Dashboard",
  components: {},
  data() {
    return {};
  },
  mounted() {},
  computed: {},
  methods: {}
};
</script>