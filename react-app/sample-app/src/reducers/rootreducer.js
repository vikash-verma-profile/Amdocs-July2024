const initialSate = {
    value: "Vikash"
};

const rootReducer = (state = initialSate, action) => {
    switch (action.type) {
        case 'STORE_DATA':
            localStorage.setItem('Data', state.value);
            return state;
        case 'GET_DATA':
            return localStorage.getItem('Data');
        default:
            return state;
    }
}

export default rootReducer;