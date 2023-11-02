# python_script.py
import requests
api_endpoint = 'https://nubela.co/proxycurl/api/v2/linkedin'
linkedin_profile_url = 'https://www.linkedin.com/in/krunaltrivedi2601'
api_key = 'a7aT5GPt_jw5kDRMtZkLog'
headers = {'Authorization': 'Bearer ' + api_key}

response = requests.get(api_endpoint, params={'url': linkedin_profile_url, 'skills': 'include'}, headers=headers)

profile_data = response.json()
print("Full Name:", profile_data)
print("Full Name:", profile_data['full_name'])
