<accordion name="collapse-lease" collapse="in">

    <div slot="title" class="ll-head">
        SPT Form
    </div>

    <frgroup>
        <label slot="label">
            Tujuan
        </label>
        <select class="form-control">
            <option>Kabupaten Banjarnegara</option>
            <option>Kabupaten Banyumas </option>
            <option>Kabupaten Batang</option>
            <option>Kabupaten Blora</option>
            <option>Kabupaten Boyolali </option>
            <option>Kabupaten Brebes </option>
            <option>Kabupaten Cilacap </option>
            <option>Kabupaten Demak </option>
            <option>Kabupaten Grobogan </option>
            <option>Kabupaten Jepara </option>
            <option>Kabupaten Karanganyar</option>
            <option>Kabupaten Kebumen </option>
            <option>Kabupaten Kendal</option>
            <option>Kabupaten Klaten</option>
            <option>Kabupaten Kudus</option>
            <option>Kabupaten Magelang</option>
            <option>Kabupaten Pati</option>
            <option>Kabupaten Pekalongan</option>
            <option>Kabupaten Pemalang</option>
            <option>Kabupaten Purbalingga</option>
            <option>Kabupaten Purworejo</option>
            <option>Kabupaten Rembang</option>
            <option>Kabupaten Semarang</option>
            <option>Kabupaten Sragen</option>
            <option>Kabupaten Sukoharjo</option>
            <option>Kabupaten Tegal</option>
            <option>Kabupaten Temanggung</option>
            <option>Kabupaten Wonogiri</option>
            <option>Kabupaten Wonosobo</option>
            <option>Kota Magelang</option>
            <option>Kota Pekalongan</option>
            <option>Kota Salatiga</option>
            <option>Kota Semarang</option>
            <option>Kota Surakarta</option>
            <option>Kota Tegal</option>
        </select>
    </frgroup>

    <frgroup>
        <label slot="label">
            Tanggal
        </label>
        <indate name="lease_deed_date" bind-to="leaseDeedDate" v-bind:dateval="leaseDeedDate"></indate>
    </frgroup>

    <frgroup>
        <label slot="label">
            Note
        </label>
        <input type="text" name="note" value="{{ old('note') }}" class="form-control" />
    </frgroup>

</div>

</accordion>
