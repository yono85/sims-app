<div class="div hide incontent-modal-new">
    <div id="modal-create-task">
        <!-- <div class="inar-body" role="false"> -->

            <div class="insed-body h-full">

                <div class="in-load">
                    <span>
                        <img src="/assets/svg/loading.blue.svg" alt="loading">
                    </span>
                </div>

                <div class="arinsed mdl-partner">

                    <form action="/api/home/task/create-new" id="form-create-newtask" >

                        <ul class="artable">

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Nama atau Label Partner</b>
                                                    </div>
                                                    <div class="div label">Nama atau label sekurangnya 5 karakter.
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                
                                                <div class="div ar-content">
                                                    <input type="text" class="w100p form-control" placeholder="Contoh: CV Herbindopersada" name="name">
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div ar-content area-partner_type">
                                                    <!-- <select name="partner_type" class="selectpicker form-control h36">
                                                        <option value="-1">Pilih Jenis Partner</option>
                                                        <option value="2">Distributor</option>
                                                        <option value="3">Maklon</option>
                                                    </select> -->
                                                </div>

                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </li>

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td colspan="2">
                                                <div class="div bts-br"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Informasi Perjanjian</b>
                                                    </div>
                                                    <div class="div label">Informasi Perjanjian dengan nomor surat dan batas akhir pembayaran</div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                
                                                <div class="div ar-content">
                                                    <input type="text" class="w100p form-control" placeholder="Nomor Surat Perjanjian" name="nosurat">
                                                </div>
                                                <div class="div bts-in"></div>

                                                <div class="div duration-day info-label ar-content">
                                                    <input type="text" class="form-control" value="0" maxlength="2" name="expire_days">
                                                    <span class="sli_icon-info"></span>
                                                    <span class="label">Batas akhir pembayaran (dalam hari)</span>
                                                </div>

                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </li>

                            <li class="list">
                                <div class="div">
                                    <table>

                                        <tr>
                                            <td colspan="2">
                                                <div class="div bts-br"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Admin</b>
                                                    </div>
                                                    <div class="div label">Tambahkan Admin sebagai pengelola Dashboard.
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                <div class="div ar-content">
                                                    <input type="text" class="w100p form-control" placeholder="Nama Admin" name="admin_name">
                                                </div>
                                                <div class="div bts-in"></div>
                                                <div class="div ar-content">
                                                    <input type="text" class="w100p form-control" placeholder="Alamat Email" name="admin_email">
                                                </div>
                                                <div class="div bts-in"></div>
                                                <div class="div ar-content">
                                                    <input type="text" class="w50p form-control number" placeholder="Whatsapp: 0878xxx" name="admin_phone" maxlength="15">
                                                </div>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </li>

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td colspan="2">
                                                <div class="div bts-br"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Owner</b>
                                                    </div>
                                                    <div class="div label">Sertakan informasi Owner, Kontak telephone dan email.</div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                <div class="div ar-content">
                                                    <input type="text" class="w100p form-control" placeholder="Nama Owner" name="owner_name">
                                                </div>
                                                <div class="div bts-in"></div>
                                                <div class="div ar-content">
                                                    <input type="text" class="w50p form-control number" placeholder="Phone" name="owner_phone" maxlength="15">
                                                </div>
                                                <div class="div bts-in"></div>

                                                <div class="div ar-content">
                                                    <input type="text" class="w100p form-control" placeholder="Email" name="owner_email">
                                                </div>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </li>

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td colspan="2">
                                                <div class="div bts-br"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Kontak</b>
                                                    </div>
                                                    <div class="div label">Lengkapi informasi kontak Partner.</div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                <div class="div ar-content">
                                                    <input type="text" class="w50p form-control number" placeholder="Phone" name="contact_phone" maxlength="15">
                                                </div>
                                                <div class="div bts-in"></div>
                                                <div class="div ar-content">
                                                    <input type="text" class="w100p form-control" placeholder="Alamat Email" name="contact_email">
                                                </div>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </li>

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td colspan="2">
                                                <div class="div bts-br"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Alamat Lengkap</b>
                                                    </div>
                                                    <div class="div label">Alamat lengkap partner</div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                <div class="div ar-content">
                                                    <textarea name="contact_address" class="form-control" maxlength="100"></textarea>
                                                </div>
                                                <div class="div ar-content">
                                                    <div class="div bts-in"></div>
                                                    
                                                    <div class="field-city indropdown area-tsrc-dropdown alist" role="false" datatimer="1000">
                                                        <div class="div">
                                                            <input class="form-control txt-def-empty tsrc-dropdown label-dropdown" name="city" type="text" placeholder="Cari Kota atau Kecamatan">
                                                            <input type="hidden" name="address_array" class="value-dropdown">
                                                            <button class="cls cmd-clear-tsrc" role="off">
                                                                <span class="sli_icon-close"></span>
                                                            </button>
                                                        </div>
                                                        <div class="dropdown dd-tsrc-dropdown">
                                                            <div class="div inardropdown no-rd">
                                                                <ul></ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="div bts-in"></div>
                                                <div class="div ar-content">
                                                    <input type="text" class="w33p form-control number" placeholder="Kode pos" maxlength="6" name="contact_kodepos">
                                                </div>
                                                
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </li>

                        </ul>

                        <input type="hidden" name="create_admin_id" value="">
                        <input type="hidden" name="create_company_id" value="">
                        <input type="submit" class="hide" value="submit">
                        
                    </form>


                </div>

            </div>

    </div>
</div>