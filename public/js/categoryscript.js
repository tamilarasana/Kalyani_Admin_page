/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/categoryscript.js":
/*!****************************************!*\
  !*** ./resources/js/categoryscript.js ***!
  \****************************************/
/***/ (() => {

eval("$(document).ready(function () {\n  fetchcategory();\n  $.ajaxSetup({\n    headers: {\n      'X-CSRF-TOKEN': $('meta[name=\"_token\"]').attr('content')\n    }\n  });\n  $(document).on('submit', '#AddEmployeeForm', function (e) {\n    e.preventDefault();\n    var formData = new FormData($('#AddEmployeeForm')[0]);\n    $.ajax({\n      url: \"/category.store\",\n      type: \"post\",\n      data: formData,\n      contentType: false,\n      processData: false,\n      success: function success(response) {\n        if (response.status == 400) {\n          $('#save_errorList').html(\"\");\n          $('#save_errorList').removeClass('d-none');\n          $.each(response.errors, function (key, err_value) {\n            $('#save_errorList').append('<li>' + err_value + '<li>'); // body...\n          });\n        } else if (response.status == 200) {\n          $('#save_errorList').html(\"\");\n          $('#save_errorList').addClass('d-none'); // this.reset();\n\n          $('#addModal').find('input').val('');\n          $('#addModal').modal('hide');\n          alert(response.message);\n          fetchcategory();\n        }\n      }\n    });\n  });\n  fetchcategory();\n\n  function fetchcategory() {\n    $.ajax({\n      type: \"GET\",\n      url: \"/fetch-category\",\n      dataType: \"json\",\n      success: function success(response) {\n        console.log(response.employee);\n        $('tbody').html(\"\");\n        $.each(response.employee, function (key, item) {\n          $('tbody').append('<tr>\\\r\n                            <td>' + item.id + '</td>\\\r\n                            <td>' + item.brand_name + '</td>\\\r\n                            <td><img src =\"uploads/Logo/' + item.brand_logo + '\"width=\"50px\" height=\"50px\" alt=Image\"></td>\\\r\n                            <td>' + item.about_brand + '</td>\\\r\n                            <td>' + item.status + '</td>\\\r\n                            <td><button type=\"button\" value=\"' + item.id + '\" class=\"edit_btn btn btn-sucess btn-sm\">Edit</button> \\\r\n                            <button type=\"button\" value=\"' + item.id + '\" class=\"delete_btn btn btn-danger btn-sm\">Delete</button>\\\r\n                            </tr>');\n        });\n      }\n    });\n  }\n\n  $(document).on('click', '.edit_btn', function (e) {\n    e.preventDefault();\n    var emp_id = $(this).val();\n    alert(emp_id);\n    $('#Editmodal').modal('show');\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvY2F0ZWdvcnlzY3JpcHQuanM/YTc1NyJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsImZldGNoY2F0ZWdvcnkiLCJhamF4U2V0dXAiLCJoZWFkZXJzIiwiYXR0ciIsIm9uIiwiZSIsInByZXZlbnREZWZhdWx0IiwiZm9ybURhdGEiLCJGb3JtRGF0YSIsImFqYXgiLCJ1cmwiLCJ0eXBlIiwiZGF0YSIsImNvbnRlbnRUeXBlIiwicHJvY2Vzc0RhdGEiLCJzdWNjZXNzIiwicmVzcG9uc2UiLCJzdGF0dXMiLCJodG1sIiwicmVtb3ZlQ2xhc3MiLCJlYWNoIiwiZXJyb3JzIiwia2V5IiwiZXJyX3ZhbHVlIiwiYXBwZW5kIiwiYWRkQ2xhc3MiLCJmaW5kIiwidmFsIiwibW9kYWwiLCJhbGVydCIsIm1lc3NhZ2UiLCJkYXRhVHlwZSIsImNvbnNvbGUiLCJsb2ciLCJlbXBsb3llZSIsIml0ZW0iLCJpZCIsImJyYW5kX25hbWUiLCJicmFuZF9sb2dvIiwiYWJvdXRfYnJhbmQiLCJlbXBfaWQiXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVU7QUFDMUJDLEVBQUFBLGFBQWE7QUFFWEgsRUFBQUEsQ0FBQyxDQUFDSSxTQUFGLENBQVk7QUFDUkMsSUFBQUEsT0FBTyxFQUFFO0FBQ0wsc0JBQWdCTCxDQUFDLENBQUMscUJBQUQsQ0FBRCxDQUF5Qk0sSUFBekIsQ0FBOEIsU0FBOUI7QUFEWDtBQURELEdBQVo7QUFNQU4sRUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWU0sRUFBWixDQUFlLFFBQWYsRUFBeUIsa0JBQXpCLEVBQTZDLFVBQVNDLENBQVQsRUFBVztBQUNwREEsSUFBQUEsQ0FBQyxDQUFDQyxjQUFGO0FBRUEsUUFBSUMsUUFBUSxHQUFHLElBQUlDLFFBQUosQ0FBYVgsQ0FBQyxDQUFDLGtCQUFELENBQUQsQ0FBc0IsQ0FBdEIsQ0FB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QUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZTSxFQUFaLENBQWUsT0FBZixFQUF3QixXQUF4QixFQUFxQyxVQUFTQyxDQUFULEVBQVc7QUFDOUNBLElBQUFBLENBQUMsQ0FBQ0MsY0FBRjtBQUNBLFFBQUlrQyxNQUFNLEdBQUczQyxDQUFDLENBQUMsSUFBRCxDQUFELENBQVE4QixHQUFSLEVBQWI7QUFDQ0UsSUFBQUEsS0FBSyxDQUFDVyxNQUFELENBQUw7QUFDRDNDLElBQUFBLENBQUMsQ0FBQyxZQUFELENBQUQsQ0FBZ0IrQixLQUFoQixDQUFzQixNQUF0QjtBQUdELEdBUEQ7QUFTSCxDQTdFRCIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCl7XHJcbiAgZmV0Y2hjYXRlZ29yeSgpOyAgIFxyXG5cclxuICAgICQuYWpheFNldHVwKHtcclxuICAgICAgICBoZWFkZXJzOiB7XHJcbiAgICAgICAgICAgICdYLUNTUkYtVE9LRU4nOiAkKCdtZXRhW25hbWU9XCJfdG9rZW5cIl0nKS5hdHRyKCdjb250ZW50JylcclxuICAgICAgICB9XHJcbiAgICB9KVxyXG5cclxuICAgICQoZG9jdW1lbnQpLm9uKCdzdWJtaXQnLCAnI0FkZEVtcGxveWVlRm9ybScsIGZ1bmN0aW9uKGUpe1xyXG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuXHJcbiAgICAgICAgbGV0IGZvcm1EYXRhID0gbmV3IEZvcm1EYXRhKCQoJyNBZGRFbXBsb3llZUZvcm0nKVswXSk7XHJcbiAgICAgICBcclxuICAgICAgICAkLmFqYXgoe1xyXG4gICAgICBcclxuICAgICAgICAgICAgdXJsOlwiL2NhdGVnb3J5LnN0b3JlXCIsXHJcbiAgICAgICAgICAgIHR5cGU6XCJwb3N0XCIsXHJcbiAgICAgICAgICAgIGRhdGE6Zm9ybURhdGEsXHJcbiAgICAgICAgICAgIGNvbnRlbnRUeXBlOmZhbHNlLFxyXG4gICAgICAgICAgICBwcm9jZXNzRGF0YTpmYWxzZSxcclxuICAgICAgICAgICAgc3VjY2VzczpmdW5jdGlvbihyZXNwb25zZSl7XHJcbiAgICAgICAgICAgICAgICBpZihyZXNwb25zZS5zdGF0dXMgPT0gNDAwKXtcclxuICAgICAgICAgICAgICAgICAgJCgnI3NhdmVfZXJyb3JMaXN0JykuaHRtbChcIlwiKTtcclxuICAgICAgICAgICAgICAgICAgJCgnI3NhdmVfZXJyb3JMaXN0JykucmVtb3ZlQ2xhc3MoJ2Qtbm9uZScpO1xyXG4gICAgICAgICAgICAgICAgICAkLmVhY2gocmVzcG9uc2UuZXJyb3JzLCBmdW5jdGlvbiAoa2V5LCBlcnJfdmFsdWUpIHtcclxuICAgICAgICAgICAgICAgICAgICAkKCcjc2F2ZV9lcnJvckxpc3QnKS5hcHBlbmQoJzxsaT4nK2Vycl92YWx1ZSsnPGxpPicpO1xyXG4gICAgICAgICAgICAgICAgICAgIC8vIGJvZHkuLi5cclxuICAgICAgICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgICAgICAgICB9ZWxzZSBpZihyZXNwb25zZS5zdGF0dXMgPT0gMjAwKXtcclxuICAgICAgICAgICAgICAgICAgJCgnI3NhdmVfZXJyb3JMaXN0JykuaHRtbChcIlwiKTtcclxuICAgICAgICAgICAgICAgICAgJCgnI3NhdmVfZXJyb3JMaXN0JykuYWRkQ2xhc3MoJ2Qtbm9uZScpO1xyXG4gICAgICAgICAgICAgICAgICAvLyB0aGlzLnJlc2V0KCk7XHJcbiAgICAgICAgICAgICAgICAgICQoJyNhZGRNb2RhbCcpLmZpbmQoJ2lucHV0JykudmFsKCcnKTtcclxuICAgICAgICAgICAgICAgICAgJCgnI2FkZE1vZGFsJykubW9kYWwoJ2hpZGUnKTtcclxuICAgICAgICAgICAgICAgICAgYWxlcnQocmVzcG9uc2UubWVzc2FnZSk7XHJcbiAgICAgICAgICAgICAgICAgIGZldGNoY2F0ZWdvcnkoKTsgICAgIFxyXG4gICAgICBcclxuICAgICAgICAgICAgICAgIH0gICAgICBcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgfSk7IFxyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICBmZXRjaGNhdGVnb3J5KCk7XHJcblxyXG4gIGZ1bmN0aW9uIGZldGNoY2F0ZWdvcnkoKXtcclxuICAgICAgICAkLmFqYXgoe1xyXG4gICAgICAgICAgdHlwZTpcIkdFVFwiLFxyXG4gICAgICAgICAgdXJsOlwiL2ZldGNoLWNhdGVnb3J5XCIsXHJcbiAgICAgICAgICBkYXRhVHlwZTpcImpzb25cIixcclxuICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uKHJlc3BvbnNlKXtcclxuICAgICAgICAgICAgY29uc29sZS5sb2cocmVzcG9uc2UuZW1wbG95ZWUpO1xyXG4gICAgICAgICAgICAkKCd0Ym9keScpLmh0bWwoXCJcIik7XHJcbiAgICAgICAgICAgICQuZWFjaChyZXNwb25zZS5lbXBsb3llZSwgZnVuY3Rpb24gKGtleSAsIGl0ZW0pe1xyXG4gICAgICAgICAgICAgICQoJ3Rib2R5JykuYXBwZW5kKCc8dHI+XFxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4nK2l0ZW0uaWQrJzwvdGQ+XFxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4nK2l0ZW0uYnJhbmRfbmFtZSsnPC90ZD5cXFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxpbWcgc3JjID1cInVwbG9hZHMvTG9nby8nK2l0ZW0uYnJhbmRfbG9nbysnXCJ3aWR0aD1cIjUwcHhcIiBoZWlnaHQ9XCI1MHB4XCIgYWx0PUltYWdlXCI+PC90ZD5cXFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPicraXRlbS5hYm91dF9icmFuZCsnPC90ZD5cXFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPicraXRlbS5zdGF0dXMrJzwvdGQ+XFxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48YnV0dG9uIHR5cGU9XCJidXR0b25cIiB2YWx1ZT1cIicraXRlbS5pZCsnXCIgY2xhc3M9XCJlZGl0X2J0biBidG4gYnRuLXN1Y2VzcyBidG4tc21cIj5FZGl0PC9idXR0b24+IFxcXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIiB2YWx1ZT1cIicraXRlbS5pZCsnXCIgY2xhc3M9XCJkZWxldGVfYnRuIGJ0biBidG4tZGFuZ2VyIGJ0bi1zbVwiPkRlbGV0ZTwvYnV0dG9uPlxcXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPicpO1xyXG4gICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuICAgIH0gXHJcblxyXG4gICAgJChkb2N1bWVudCkub24oJ2NsaWNrJywgJy5lZGl0X2J0bicsIGZ1bmN0aW9uKGUpe1xyXG4gICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgIHZhciBlbXBfaWQgPSAkKHRoaXMpLnZhbCgpO1xyXG4gICAgICAgYWxlcnQoZW1wX2lkKTtcclxuICAgICAgJCgnI0VkaXRtb2RhbCcpLm1vZGFsKCdzaG93Jyk7XHJcblxyXG4gICAgICBcclxuICAgIH0pO1xyXG5cclxufSlcclxuIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9jYXRlZ29yeXNjcmlwdC5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/categoryscript.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/categoryscript.js"]();
/******/ 	
/******/ })()
;