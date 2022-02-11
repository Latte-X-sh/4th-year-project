<?php
// require './lib/functions.php';

checkstatus();
?>
      <div class="container">
        <h2 class="main-title">Edit Users</h2>
        <div class="row stat-cards">
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                <i data-feather="bar-chart-2" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">0</p>
                <p class="stat-cards-info__title">Total Users</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon warning">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">0</p>
                <p class="stat-cards-info__title">Male Users </p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>0.24%
                  </span>
                  This month
                </p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon purple">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">1478 286</p>
                <p class="stat-cards-info__title">Female Users</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit danger">
                    <i data-feather="trending-down" aria-hidden="true"></i>1.64%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon success">
                <i data-feather="feather" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">1478 286</p>
                <p class="stat-cards-info__title">New Users</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit warning">
                    <i data-feather="trending-up" aria-hidden="true"></i>0.00%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <!-- <div class="chart">
              <canvas id="myChart" aria-label="Site statistics" role="img"></canvas>
            </div> -->
            <!-- for each -->
            <p class="white-block__title">List of all Users</p>
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    <th>
                      <label class="users-table__checkbox ms-20">
                        <input type="checkbox" class="check-all">User Profile
                      </label>
                    </th>
                    <th>Email</th>
                    <th>Full Names</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Favourite Category</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                      
                          <div class="pages-table-img">
                            <picture><source srcset="./img/avatar/avatar-face-04.webp" type="image/webp"><img src="./img/avatar/avatar-face-04.png" alt="User Name"></picture>
                            <!-- Jenny Wilson -->
                          </div>
                       
                        <!-- <div class="categories-table-img">
                          <picture><source srcset="./img/categories/01.webp" type="image/webp"><img src="./img/categories/01.jpg" alt="category"></picture>
                        </div> -->
                      </label>
                    </td>
                    <td>
                     latteindigox@gmail.com
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <!-- <picture><source srcset="./img/avatar/avatar-face-04.webp" type="image/webp"><img src="./img/avatar/avatar-face-04.png" alt="User Name"></picture> -->
                        Jenny Wilson
                      </div>
                    </td>
                    <!-- <td><span class="badge-active">FEMALE</span></td> -->
                    <td>22</td>
                    <td><span class="badge-pending">MALE</span></td>
                    <td>Furniture</td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <!-- <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li> -->
                          <li><a href="##">Trash</a></li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-lg-3">
            <!-- <article class="customers-wrapper">
              <canvas id="customersChart" aria-label="Customers statistics" role="img"></canvas>
                          <p class="customers__title">New Customers <span>+958</span></p>
              <p class="customers__date">28 Daily Avg.</p>
              <picture><source srcset="./img/svg/customers.svg" type="image/webp"><img src="./img/svg/customers.svg" alt=""></picture> 
            </article> -->
            <p class="white-block__title">AR Active Users</p>
            <article class="white-block">
              <div class="top-cat-title">
                <h3>Top Users</h3>
                <p>Showing 28 out of  1400 Users</p>
              </div>
              <ul class="top-cat-list">
                <li>
                  <a href="##">
                    
                    <div class="top-cat-list__title">
                      Madison Blue <span>Android v7</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Egonomic Chair <span class="purple">KSH 3000</span>
                    </div>
                  </a>
                </li>
                <!-- <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Tutorials <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Coding tutorials <span class="blue">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Technology <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Dailiy technology articles <span class="danger">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      UX design <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      UX design tips <span class="success">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Interaction tips <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Interaction articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      App development <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Mobile development articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Nature <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Wildlife animal articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Geography <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Geography articles <span class="primary">+472</span>
                    </div>
                  </a>
                </li> -->
              </ul>
            </article>
          </div>
        </div>
      </div>
