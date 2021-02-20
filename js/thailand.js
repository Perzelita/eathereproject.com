$.Thailand({
    // เปลี่ยนไปใช้ geodb แทน จะเป็น geodb.json หรือ geodb.zip ก็ได้
    database: 'https://github.com/earthchie/jquery.Thailand.js/tree/master/jquery.Thailand.js/database/geodb.json', 

    $search: $('#search'),

    $district_code: $('#district_code'),
    $amphoe_code: $('#amphoe_code'),
    $province_code: $('#province_code'),

    onDataFill: function(data){
        console.log(data);
        /*
        ผลลัพธ์ที่ได้
        {
            district: '',
            district_code: '',
            amphoe: '',
            amphoe_code: '',
            province: '',
            province_code: '',
            zipcode: ''
        }
        */
    }
});