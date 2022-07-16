// Render and get record from server

import config from '../config.js'

const TableBody = async el => {
  // Fetching
  const fetchResults = await fetch(config.endpoint)
  const responses = await fetchResults.json()

  // render
  let num = 1;
  el.innerHTML = responses.map(res => {
    return `
      <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${ num++ }</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              ${ res.name }
          </td>
           <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              ${ res.client }
          </td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <span class="flex gap-2 justify-center items-center">
                <i class="fa-solid fa-user text-gray-400"></i>
                ${ res.leader }
              </span>
          </td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              ${ res.start_date }
          </td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              ${ res.end_date }
          </td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">              
            <div class="flex justify-between mb-1">
              <span class="text-xs font-medium text-green-700 dark:text-white">${ res.progress }%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
              <div class="bg-green-600 h-2.5 rounded-full" style="width: ${ res.progress }%"></div>
            </div>
 
          </td>
          <td class="text-sm text-gray-900 flex justify-center gap-2 font-light px-6 py-4 whitespace-nowrap">
              <button class="bg-blue-600 rounded py-2 px-3"><i class="fa-solid fa-edit text-gray-100"></i></button>
              <button class="bg-red-600 rounded py-2 px-3"><i class="fa-solid fa-trash text-gray-100"></i></button>
          </td>
        </td>
      </tr>
    `
  }).join('')
}

export default TableBody
