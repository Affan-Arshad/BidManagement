
export const applyDrag = (arr, dragResult) => {
  const { removedIndex, addedIndex, payload } = dragResult
  if (removedIndex === null && addedIndex === null) return arr

  const result = [...arr]
  let itemToAdd = payload

  if (removedIndex !== null) {
    itemToAdd = result.splice(removedIndex, 1)[0]
  }

  if (addedIndex !== null) {
    result.splice(addedIndex, 0, itemToAdd)
  }

  return result
}

export const handleDrop = (arr, { removedIndex, addedIndex, payload : itemToAdd }, columnName) => {
  console.log(itemToAdd)
  if (removedIndex === null && addedIndex === null) return arr
  let newArr = [...arr]

  // if (removedIndex !== null) {
  //   let itemBefore = newArr[removedIndex-1]
  //   let itemAfter = newArr[removedIndex+1]
  //   if(itemBefore) {
  //     if(itemAfter) {
  //       itemBefore.next_id = itemAfter.id
  //     } else {
  //       itemBefore.next_id = null
  //     }
  //   }
  //   newArr.splice(removedIndex-1, 0, itemBefore)
  //   itemToAdd = newArr.splice(removedIndex, 1)[0]
  // }

  if (addedIndex !== null) {
    let itemToAddIndex = newArr.indexOf(itemToAdd)
    let itemBefore = newArr[addedIndex-1]
    itemToAdd.columnName = columnName
    if(itemBefore !== null) {
      itemToAdd.sort_order = itemBefore.sort_order + 1;
      newArr.map( (item) => {
        if(item.sort_order > itemBefore.sort_order) item.sort_order++
        return item
      })
    }
    
    newArr.splice(itemToAddIndex, 1, itemToAdd)
  }
  return newArr
  

}

export const generateItems = (count, creator) => {
  const result = []
  for (let i = 0; i < count; i++) {
    result.push(creator(i))
  }
  return result
}
