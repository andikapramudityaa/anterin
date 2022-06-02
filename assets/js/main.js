var selectedRow = null

function onFormSubmit()
{
    var formData = readFormData();
    if(selectedRow == null)
    {
        insertNewRecord(formData);
    }
    else
    {
        updateRecord(formData);
    }
    resetForm();
}
function readFormData()
{
    var formData = {};
    formData['resi'] = document.getElementById('resi').value;
    formData['paket'] = document.getElementById('paket').value;
    formData['alamat'] = document.getElementById('alamat').value;
    formData['penerima'] = document.getElementById('penerima').value;
    formData['Ket'] = document.getElementById('ket').value;
    return formData;
}
function insertNewRecord(data)
{
    var table = document.getElementById('paket-list').getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.resi;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.paket;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.alamat;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.penerima;
    cell5 = newRow.insertCell(4);
    cell5.innerHTML = data.Ket;
    cell6 = newRow.insertCell(5);
    cell6.innerHTML = `<a onClick="onEdit(this)" class="btn btn-success btn-sm edit"><i class="far fa-edit" style="pointer-events: none;"></i></a>`;
    cell7 = newRow.insertCell(6);
    cell7.innerHTML = `<a onClick="onDelete(this)" class="btn btn-danger btn-sm delete"><i class="far fa-trash-alt" style="pointer-events: none;"></i></a>`;
}
function resetForm()
{
    document.getElementById('resi').value = '';
    document.getElementById('paket').value = '';
    document.getElementById('alamat').value = '';
    document.getElementById('penerima').value = '';
    document.getElementById('ket').value = '';
    selectedRow = null;
}
function onEdit(td)
{
    selectedRow = td.parentElement.parentElement;
    document.getElementById('resi').value = selectedRow.cells[0].innerHTML;
    document.getElementById('paket').value = selectedRow.cells[1].innerHTML;
    document.getElementById('alamat').value = selectedRow.cells[2].innerHTML;
    document.getElementById('penerima').value = selectedRow.cells[3].innerHTML;
    document.getElementById('ket').value = selectedRow.cells[4].innerHTML;
}
function updateRecord(formData)
{
    selectedRow.cells[0].innerHTML = formData.resi;
    selectedRow.cells[1].innerHTML = formData.paket;
    selectedRow.cells[2].innerHTML = formData.alamat;
    selectedRow.cells[3].innerHTML = formData.penerima;
    selectedRow.cells[4].innerHTML = formData.Ket;
}
function onDelete(td)
{
    row = td.parentElement.parentElement;
    document.getElementById('fruit-list').deleteRow(row.rowIndex);
    resetForm();
}