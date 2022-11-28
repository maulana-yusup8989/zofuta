foreach ($stmt as $row) {
                            $image = (!empty($row['foto_lapangan'])) ? '../img/' . $row['foto_lapangan'] : '../img/lapangan.png';
                            echo "<div class='col'>";
                            echo "
                            <div class='accordion-item'>
                            <h2 class='accordion-header' id='headingOne'>
                                <button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
                                '.$row['nama_lapangan'].'
                                </button>
                            </h2>
                            <div id='collapseOne' class='accordion-collapse collapse show' aria-labelledby='headingOne' data-bs-parent='#accordionExample'>
                                <div class='accordion-body'>
                                    <div class='container'>
                                        <div class='row'>
                                            <div class='col-3 bg-success '>
                                                <img src='' alt='lapangan' srcset='lapangan'>
                                            </div>
                                            <div class='col-8'>
                                                <div class='row'>
                                                    <div class='col '>
                                                        <h4> Harga</h4>
                                                    </div>
                                                    <div class='col'>
                                                        <h4> Jenis Lapangan</h4>
                                                    </div>
                                                    <div class='col'>
                                                        <h4>Tanggal</h4>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col '>
                                                        <p>70.000/Jam</p>
                                                    </div>
                                                    <div class='col'>
                                                        <p>Rumput Sintetis</p>
                                                    </div>
                                                    <div class='col'>
                                                        <select class='form-select' id='state' required>
                                                            <option value=''>Choose...</option>
                                                            <option>California</option>
                                                        </select>
                                                    </div>
                                                    <div class='container'>
                                                        <div class='table-container'>
                                                            <table class='table'>
                                                                <thead>
                                                                    <tr>
                                                                        <th>06:00 - 07:00 </th>
                                                                        <th>07:00 - 08:00</th>
                                                                        <th>08:00 - 09:00</th>
                                                                        <th>09:00 - 10:00</th>
                                                                        <th>10:00 - 11:00</th>
                                                                        <th>11:00 - 12:00</th>
                                                                        <th>12:00 - 13:00</th>
                                                                        <th>13:00 - 14:00</th>
                                                                        <th>14:00 - 15:00</th>
                                                                        <th>15:00 - 16:00</th>
                                                                        <th>16:00 - 17:00</th>
                                                                        <th>17:00 - 18:00</th>
                                                                        <th>18:00 - 19:00</th>
                                                                        <th>19:00 - 20:00</th>
                                                                        <th>20:00 - 21:00</th>
                                                                        <th>21:00 - 22:00</th>
                                                                        <th>22:00 - 23:00</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td style='color:#cd2e2e ;background-color: #cd2e2e;'>BOOKED</td>
                                                                        <td style='color:#2ECD71 ;background-color: #2ECD71;'>AVAILABLE</td>
                                                                        <td style='color:#cd2e2e ;background-color: #cd2e2e;'>BOOKED</td>
                                                                        <td style='color:#2ECD71 ;background-color: #2ECD71;'>AVAILABLE</td>
                                                                        <td style='color:#cd2e2e ;background-color: #cd2e2e;'>BOOKED</td>
                                                                        <td style='color:#2ECD71 ;background-color: #2ECD71;'>AVAILABLE</td>
                                                                        <td style='color:#cd2e2e ;background-color: #cd2e2e;'>BOOKED</td>
                                                                        <td style='color:#2ECD71 ;background-color: #2ECD71;'>AVAILABLE</td>
                                                                        <td style='color:#cd2e2e ;background-color: #cd2e2e;'>BOOKED</td>
                                                                        <td style='color:#2ECD71 ;background-color: #2ECD71;'>AVAILABLE</td>
                                                                        <td style='color:#cd2e2e ;background-color: #cd2e2e;'>BOOKED</td>
                                                                        <td style='color:#2ECD71 ;background-color: #2ECD71;'>AVAILABLE</td>
                                                                        <td style='color:#cd2e2e ;background-color: #cd2e2e;'>BOOKED</td>
                                                                        <td style='color:#2ECD71 ;background-color: #2ECD71;'>AVAILABLE</td>
                                                                        <td style='color:#cd2e2e ;background-color: #cd2e2e;'>BOOKED</td>
                                                                        <td style='color:#2ECD71 ;background-color: #2ECD71;'>AVAILABLE</td>
                                                                        <td style='color:#cd2e2e ;background-color: #cd2e2e;'>BOOKED</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                ";
                         echo "</div>";
                        }