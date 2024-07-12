import logo from './logo.svg';
import './App.css';
import {GET_DATA, STORE_DATA} from './actions';
import { connect } from 'react-redux';

function App({value,GET_DATA,STORE_DATA}) {

  return (
    <div>
    <p>asd</p>
    </div>
  );
}
const mapdata=(state)=>({
  value:state.value;
});

export default connect(mapdata,{GET_DATA,STORE_DATA}(App));
