function searchTables() {

      var input, filter, allTables, allRows, i, j;

      input = document.getElementById("searchInput");

      filter = input.value.toUpperCase();



      allTables = document.getElementsByTagName('table');



      var foundCount = 0;



      for (var table of allTables) {

        allRows = table.getElementsByTagName('tr');



        for (i = 1; i < allRows.length; i++) {

          var found = false;

          var cells = allRows[i].getElementsByTagName('td');

          for (j = 0; j < cells.length; j++) {

            if (cells[j]) {

              var txtValue = cells[j].textContent.toUpperCase();

              if (txtValue.indexOf(filter) > -1) {

                found = true;

                foundCount++;

                break;

              }

            }

          }

          if (found || filter === '') {

            allRows[i].style.display = "";

          } else {

            allRows[i].style.display = "none";

          }

        }

      }



      if (filter!== '') {

        if (foundCount > 0) {

          input.style.borderColor = "#4CAF50";

        } else {

          input.style.borderColor = "red";

        }



        var resultInfo = document.getElementById("resultInfo");

        resultInfo.style.display = "block";

        resultInfo.innerHTML = "搜索结果为 <span style='color:#FF0000;'>" + foundCount + "</span> 条";

      } else {

        input.style.borderColor = "#808080";

        var resultInfo = document.getElementById("resultInfo");

        resultInfo.style.display = "none";

      }

    }



    function expandSearchInput() {

      var input = document.getElementById("searchInput");

      input.style.width = "80%";

    }



    function handleClickOutsideSearch() {

      var input = document.getElementById("searchInput");

      if (!input.contains(event.target) && input.value === '') {

        input.style.width = "50%";

        input.style.borderColor = "#808080";

      }

    }





    // 这里统计表格总数

    function countRows() {

      var tables = document.getElementsByTagName('table');

      var totalRows = 0;



      for (var i = 0; i < tables.length; i++) {

        var rows = tables[i].rows;

        for (var j = 1; j < rows.length; j++) {  // 从第二行开始计算

          totalRows++;

        }

      }



      var rowCountElement = document.getElementById('rowCount');

      rowCountElement.innerHTML = totalRows;

      rowCountElement.style.fontSize = '20px';

      rowCountElement.style.color ='#1E90FF';  // 浅红色

      rowCountElement.style.fontWeight = 'bold';



      var rowCountMessage = document.getElementById('rowCountMessage');

      rowCountMessage.style.fontWeight = 'bold';

    }



    // 在页面加载完成后执行计数函数

    window.onload = countRows;