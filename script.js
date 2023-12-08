Array.prototype.sample = function(){
	return this[Math.floor(Math.random()*this.length)];
}
class Script_Manager {
	constructor(type, settings) {
		this.type = type;
		this.config = settings;
		this.video = null;
		this.muted = true;
		this.range = null;
		this.tm = settings.closeAt / 1000;
	}
	progress = (e) => {
		var p = (e.srcElement.currentTime / e.srcElement.duration) * 100;
		var o = e.currentTarget;
		o.offsetParent.querySelector("#rang").style.width = p + "%";
		if(this.tm > e.srcElement.currentTime) {
			o.offsetParent.querySelector('.smv_close_count').innerHTML = `Close ad in ${Math.ceil(this.tm - e.srcElement.currentTime)} sec`;
		} else {
			o.offsetParent.querySelector('.smv_close_text').style.display = "block";
			o.offsetParent.querySelector('.smv_close_count').style.display = "none";
		}
	}
	buildVideo = () => {
		let v;
		v = document.createElement("video");
		v.autoplay = true;
			var sc = document.createElement("source"); 
			sc.type = "video/mp4";
			sc.src = this.config.video;
		v.type = "video/mp4";
		v.muted = true;
		v.appendChild(sc);
		v.addEventListener('timeupdate', this.progress.bind(this));
		v.onclick = () => {
			window.open(this.config.url, '_blank');
			let total_views = this.getCookie('SM_V') ? parseInt(this.getCookie('SM_V')) + 1 : 1;
			this.setCookie('SM_V', total_views, this.config.expire);
		}
		if(this.config.repeat > 0) {
			let total_views = this.getCookie('SM_V') ? parseInt(this.getCookie('SM_V')) + 1 : 1;
			this.setCookie('SM_V', total_views, this.config.expire);
		}
		this.video = v;
		return v;
	}
	buildIframe = () => {
		let v;
		let self = this;
		let videos = this.config.videos;
		let url_final = null;
		if(this.config.proxy == 'on')
			url_final = (self.config.a_s && this.zelot() ? script_manager.iframe + '?src=' + window.btoa(this.config.iframe) + '&a=true&media=' + videos.sample() : this.config.iframe);
		else
			url_final = this.config.iframe;
		v = document.createElement("iframe");
		v.src = url_final;
		this.iframe = v;
		if(this.config.repeat > 0) {
			let total_views = this.getCookie('SM_V') ? parseInt(this.getCookie('SM_V')) + 1 : 1;
			this.setCookie('SM_V', total_views, this.config.expire);
		}
		return v;
	}
	buildRange = () => {
		if(this.config.type != 'video') return;
		let p = document.createElement("div");
		p.classList.add("prang")
		let r = document.createElement("div");
		r.classList.add("--rang")
		r.id = "rang"
		p.style.background = 'black';
		r.style.background = 'red';
		p.append(r);
		return p;
	}
	buildClose = () => {
		let x = document.createElement("div");
		x.classList.add("smv_close");
		x.innerHTML = `
			<div class="smv_close_count">Close ad in ${this.tm} sec</div>
			<div class="smv_close_text">
				<span>Close ad</span>
				<svg id="smv_close_x" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: block;">
					<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
					<path d="M0 0h24v24H0z" fill="none"></path>
				</svg>
			</div>
			`;
		x.querySelector('.smv_close_text').onclick = (e) => {
			var o = e.currentTarget;
			if(this.config.type == 'video')
				o.offsetParent.offsetParent.querySelector("video").pause();
			o.offsetParent.offsetParent.style.right = "-426px";
			setTimeout(()=>{o.offsetParent.offsetParent.remove();},1000)
		}
		if(this.config.type == 'iframe') {
			setTimeout(()=> {
				x.querySelector('.smv_close_text').style.display = "block";
				x.querySelector('.smv_close_count').style.display = "none";
			}, (this.config.start + this.config.closeAt));
		}
		return x;
	}
	buildMuted = () => {
		if(this.config.type != 'video') return;
		let m = document.createElement("div");
		m.classList.add("--muted");
		m.innerHTML = `<div class="smv_mute_button">
			<svg class="off" viewBox="0 0 15 19" xmlns="http://www.w3.org/2000/svg" style="display: none;">
				<path d="m0 5.5924v5.8152h3.7778l4.7222 4.8461v-15.507l-4.7222 4.8461h-3.7778zm12.75 2.9076c0-1.7155-0.9633-3.1887-2.3611-3.9059v7.8021c1.3978-0.7075 2.3611-2.1807 2.3611-3.8962zm-2.3611-8.5v1.9966c2.7294 0.83352 4.7222 3.431 4.7222 6.5034 0 3.0724-1.9928 5.6699-4.7222 6.5034v1.9966c3.7872-0.882 6.6111-4.3518 6.6111-8.5 0-4.1482-2.8239-7.618-6.6111-8.5z"></path>
			</svg>
			<svg class="on" viewBox="0 0 15 19" xmlns="http://www.w3.org/2000/svg" style="display: block;">
				<path d="m12.75 8.5c0-1.6717-0.9633-3.1072-2.3611-3.8061v2.0872l2.3139 2.3139c0.0283-0.18889 0.0472-0.38722 0.0472-0.595zm2.3611 0c0 0.88778-0.1889 1.7189-0.51 2.4933l1.4261 1.4261c0.6234-1.1711 0.9728-2.5027 0.9728-3.9194 0-4.0422-2.8239-7.4233-6.6111-8.2828v1.9456c2.7294 0.81222 4.7222 3.3433 4.7222 6.3372zm-13.912-8.5l-1.1994 1.1994 4.4672 4.4672h-4.4672v5.6666h3.7778l4.7222 4.7223v-6.3562l4.0139 4.0139c-0.6328 0.4911-1.3411 0.8784-2.125 1.1145v1.9455c1.3033-0.2927 2.4839-0.8972 3.485-1.7094l1.9267 1.9361 1.1994-1.1994-8.5-8.5-7.3006-7.3006zm7.3006 0.94444l-1.9739 1.9739 1.9739 1.9739v-3.9478z"></path>
			</svg>
		</div>`;
		m.onclick = (e) => {
			var o = e.currentTarget;
			let vid = o.offsetParent.querySelector("video"),
				on = o.offsetParent.querySelector(".smv_mute_button .on"),
				off = o.offsetParent.querySelector(".smv_mute_button .off");
			if(this.muted) {
				on.style.display = 'none';
				off.style.display = 'block';
			} else {
				on.style.display = 'block';
				off.style.display = 'none';
			}
			this.muted= !this.muted
			vid.muted = this.muted;
		}
		return m;
	}
	tmp = () => {
		let main = document.createElement("div");
		main.classList.add("script_manager_video_master");
		if(!this.config.a_s && this.zelot())
			main.classList.add("ad_row");
		let tpl = `
		    <div class="trend--i">
		        <div class="--w">
		            <div class="--v"></div>
		        </div>
		    </div>
		`;
		main.innerHTML = tpl;
		if(this.config.type == 'video')
			main.querySelector(".--v").append(this.buildVideo());
		if(this.config.type == 'iframe') {
			main.querySelector(".--v").append(this.buildIframe());
			main.querySelector(".--v").style.position = 'relative';

		}
		main.querySelector(".--w").append(this.buildRange());
		main.querySelector(".--w").append(this.buildClose());
		main.querySelector(".--w").append(this.buildMuted());
		return main;
	}
	init = () => {
		switch(this.type) {
			case 'video':
				if((this.config.repeat > 0 && parseInt(this.getCookie('SM_V')) >= this.config.repeat) || (this.config.repeat == 0 && parseInt(this.getCookie('SM_V')) > 0 )) return false;
				if(this.config.device == '' || (this.config.device == 'pc' && this.isMobile()) || (this.config.device == 'mobil' && !this.isMobile())) return false;
				let obj = this.tmp();
				document.body.append(obj);
				if(this.config.type == 'iframe')
					Script_Manager_timer();
				setTimeout(()=>{
					obj.style.right = "0px";
				}, this.config.start);
			break;
			case 'pop':
				if(this.getCookie('SM_P')) return false;
				if(this.config.device == '' || (this.config.device == 'pc' && this.isMobile()) || (this.config.device == 'mobil' && !this.isMobile())) return false;
				let self = this;
				let url_final = (self.config.a && this.zelot() ? Script_manager.site_url + Script_manager.a + window.btoa(self.config.url) : self.config.url);
				document.addEventListener("DOMContentLoaded", function(event) {
					setTimeout(()=> {
						let links = document.getElementsByTagName('a');
						for(let i=0, il = links.length; i < il; i ++) {
							links[i].onclick = (e) => {
								self.setCookie('SM_P', true, self.config.expire);
								if(self.config.version == 'v1') {
									window.open(e.currentTarget.href, '_blank');
									window.open(url_final, '_self');
									e.stopPropagation();
									return false;
								} else {
									window.open(url_final, '_blank').focus();
									window.location.href = e.currentTarget.href;
								}
							}
						}
					}, self.config.start);
				});
			break;
		}
	}
	setCookie = (name, value, minutes) => {
		var date = new Date;
		date.setMinutes(date.getMinutes() + parseInt(minutes));
		var c_value = encodeURIComponent(value) + "; expires=" + date.toUTCString() + "; path=/";
		document.cookie = name + "=" + c_value;
	}
	getCookie = (name) => {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}
		return null;
	}
	isMobile = () => {
		const toMatch = [
			/Android/i,
			/webOS/i,
			/iPhone/i,
			/iPad/i,
			/iPod/i,
			/BlackBerry/i,
			/Windows Phone/i
		];
		return toMatch.some((toMatchItem) => {
			return navigator.userAgent.match(toMatchItem);
		});
	}
	closeClock = () => {
			if(this.tm == 0) {

			} else {
				this.tm -= 1;
				setTimeout(this.closeClock(), 1000);
			}
	}
	zelot = () => {
		let x = document.getElementById('wrapZarate');
		return !Boolean(x ? x.clientHeight : 0);
	}
}
function Script_Manager_timer() {
	if(Script_Manager_Time == 0){
		// alert('Final');
	} else {
		Script_Manager_Time -= 1;
		document.querySelector('.smv_close_count').innerHTML = `Close ad in ${Script_Manager_Time} sec`;
		setTimeout("Script_Manager_timer()",1000);
	}
}