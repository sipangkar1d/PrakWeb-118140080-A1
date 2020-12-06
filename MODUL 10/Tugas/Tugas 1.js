var app = new function() {

    this.el = document.getElementById('barang');
    this.barang = ['Buku Tulis','Pensil','Spidol'];
    
    this.FetchAll = function() {
      var data = '';
  
      if (this.barang.length > 0) {
        for (i = 0; i < this.barang.length; i++) {
          data += '<ul>';
          data += '<li>' + this.barang[i] + ' ';
          data += '<a href = "#" onclick="app.Edit(' + i + ')">[Edit </a>';
          data += '<a href = "#" onclick="app.Delete(' + i + ')"> | Delete]</a></li>';
          data += '</ul>';
        }
      }
      return this.el.innerHTML = data;
    };
  
    this.Add = function () {
      el = document.getElementById('text');
      var barang = el.value;
  
      if (barang) {
        this.barang.push(barang.trim());
        el.value = '';
        this.FetchAll();
      }
    };
  
    this.Edit = function (item) {
      var el ;
      el = prompt('Nama baru','');
      this.barang[item] = el;
          this.FetchAll();
    };
  
    this.Delete = function (item) {
      var yakin;
      yakin = confirm('Kamu yakin ingin menghapus?');
      if(yakin){
        this.barang.splice(item, 1);
        this.FetchAll();
      }
    };
  }

app.FetchAll();
  function CloseInput() {
    document.getElementById('spoiler').style.display = 'none';
  }