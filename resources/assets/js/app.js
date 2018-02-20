require('axios'); //AJAX XHR Performer.
require('vue');   //Front End Framework.
window.axios = require('axios');   //AXIOS >> AJAX XHR Performer.
window.Vue = require('vue');      //Front End Framework.
import ElementUI from 'element-ui'  //Front/JS/CSS Framework based on JS/CSS/VUE.
import locale from 'element-ui/lib/locale'
import enLocale from 'element-ui/lib/locale/lang/en'  //Local language to avoid chinees typography for Element-UI.
import 'element-ui/lib/theme-chalk/index.css'
require('materialize-css'); //Front/JS/CSS Framework based on JS/CSS.
Vue.use(ElementUI)  //Usage Scope to contact between both of VUE and Element-UI.
locale.use(enLocale)
//Element-UI Components
import {
  Pagination,
  Dialog,
  Autocomplete,
  Dropdown,
  DropdownMenu,
  DropdownItem,
  Menu,
  Submenu,
  MenuItem,
  MenuItemGroup,
  Input,
  InputNumber,
  Radio,
  RadioGroup,
  RadioButton,
  Checkbox,
  CheckboxGroup,
  Switch,
  Select,
  Option,
  OptionGroup,
  Button,
  ButtonGroup,
  Table,
  TableColumn,
  DatePicker,
  TimeSelect,
  TimePicker,
  Popover,
  Tooltip,
  Breadcrumb,
  BreadcrumbItem,
  Form,
  FormItem,
  Tabs,
  TabPane,
  Tag,
  Tree,
  Alert,
  Slider,
  Icon,
  Row,
  Col,
  Upload,
  Progress,
  Spinner,
  Badge,
  Card,
  Rate,
  Steps,
  Step,
  Carousel,
  Scrollbar,
  CarouselItem,
  Collapse,
  CollapseItem,
  Cascader,
  ColorPicker,
  Loading,
  MessageBox,
  Message,
  Notification
} from 'element-ui'
//VUE Usage Scope for Element-UI Components
Vue.use(Pagination)
Vue.use(Dialog)
Vue.use(Autocomplete)
Vue.use(Dropdown)
Vue.use(DropdownMenu)
Vue.use(DropdownItem)
Vue.use(Menu)
Vue.use(Submenu)
Vue.use(MenuItem)
Vue.use(MenuItemGroup)
Vue.use(Input)
Vue.use(InputNumber)
Vue.use(Radio)
Vue.use(RadioGroup)
Vue.use(RadioButton)
Vue.use(Checkbox)
Vue.use(CheckboxGroup)
Vue.use(Switch)
Vue.use(Select)
Vue.use(Option)
Vue.use(OptionGroup)
Vue.use(Button)
Vue.use(ButtonGroup)
Vue.use(Table)
Vue.use(TableColumn)
Vue.use(DatePicker)
Vue.use(TimeSelect)
Vue.use(TimePicker)
Vue.use(Popover)
Vue.use(Tooltip)
Vue.use(Breadcrumb)
Vue.use(BreadcrumbItem)
Vue.use(Form)
Vue.use(FormItem)
Vue.use(Tabs)
Vue.use(TabPane)
Vue.use(Tag)
Vue.use(Tree)
Vue.use(Alert)
Vue.use(Slider)
Vue.use(Icon)
Vue.use(Row)
Vue.use(Col)
Vue.use(Upload)
Vue.use(Progress)
Vue.use(Spinner)
Vue.use(Badge)
Vue.use(Card)
Vue.use(Rate)
Vue.use(Steps)
Vue.use(Step)
Vue.use(Carousel)
Vue.use(Scrollbar)
Vue.use(CarouselItem)
Vue.use(Collapse)
Vue.use(CollapseItem)
Vue.use(Cascader)
Vue.use(ColorPicker)
Vue.use(Loading.directive)
Vue.prototype.$loading = Loading.service
Vue.prototype.$msgbox = MessageBox
Vue.prototype.$alert = MessageBox.alert
Vue.prototype.$confirm = MessageBox.confirm
Vue.prototype.$prompt = MessageBox.prompt
Vue.prototype.$notify = Notification
Vue.prototype.$message = Message
window.App = new Vue({
	el : '#app' , 
	data : {
		map : window.CharMap ,
		input : '' ,
		key : '' , 
		enc : false ,
		hoverEnc : false , 

	},
	mounted(){
		
	},
	computed : {
		splitted(){
			return this.input.split('');
		},
		keyOffset(){
			if(this.key.length == 0) return 0 ;
			let splitted = this.key.split('') , sum = 0 , i;
			for(i = 0 ; i < splitted.length; i++){
				sum += this.mapIndex(splitted[i]);
			}
			return !this.enc ? sum : -sum ;
		},
		encrypted(){
			let res = [] , i ;
			for(i = 0 ; i < this.splitted.length; i++){
				res.push(this.map.chars[ this.equivIndex( this.mapIndex(this.splitted[i])  , this.keyOffset ) ])
			}
			return res.join('');
		},
		hashed(){
			let res = [] , i ;
			for(i = 0 ; i < this.splitted.length; i++){
				res.push(this.map.hashs[ this.equivIndex( this.mapIndex(this.splitted[i])  , this.keyOffset ) ])
			}
			return res.join('');
		}
	},
	methods : {
		mapIndex(char){
			return this.map.chars.indexOf(char);
		},
		equivIndex(index , offset){
			//mapLength
			let len = this.map.chars.length;

			let pushOffset =  (offset + index) % len ;
			if(pushOffset < 0) pushOffset = len + pushOffset ;
			return pushOffset;

		},
		copyEncrypted(){
			document.getElementById('enctest').select();
			 document.execCommand("Copy");
		},
		encToggle(flag){
			this.hoverEnc = flag;
		}
	}
});
