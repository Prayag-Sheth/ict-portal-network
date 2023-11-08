# python -m uvicorn fetch_linkedin_data:app --reload
# def temp():
import json
# Load the JSON data
  # json_data = '{"public_identifier": "john_doe","profile_pic_url": "https://example.com/profile_pic",  "full_name": "John Doe",  "skills": ["Skill1", "Skill2"],    "occupation": "Software Engineer",    "headline": "Full Stack Developer",    "summary": "A passionate developer with a love for coding.",   "country": "US","city": "New York"}'
  # json_object = json.loads(json_data)
  # return json_object

from fastapi import FastAPI
app = FastAPI()
from fastapi.middleware.cors import CORSMiddleware
origins = ["*"]
app.add_middleware(
    CORSMiddleware,
    allow_origins=origins,
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# @app.get("/my-first-api")
# def hello(link=None):
#   json_data = '{"public_identifier": "john_doe","profile_pic_url": "https://example.com/profile_pic",  "full_name": "John Doe",  "skills": ["Skill1", "Skill2"],    "occupation": "Software Engineer",    "headline": "Full Stack Developer",    "summary": "A passionate developer with a love for coding.",   "country": "US","city": "New York"}'
#   json_object = json.loads(json_data)
#   return json_object
    



# Output:
# ['Software Engineer', 30, 'John Doe']



import requests
api_endpoint = 'https://nubela.co/proxycurl/api/v2/linkedin'
# linkedin_profile_url = 'https://www.linkedin.com/in/krunaltrivedi2601'
# linkedin_profile_url = 'https://www.linkedin.com/in/prayag-sheth-75426716b/'
# https://www.linkedin.com/in/prayag-sheth-75426716b/
api_key = 'kL24W-t5jTre3wydGiT9CQ	'

@app.get("/my-first-api")
def hello(link=''):
# -----------------------------------------------------------

#   response = {'public_identifier': 'prayag-sheth-75426716b',
#  'profile_pic_url': 'https://media.licdn.com/dms/image/C4E03AQG0xPl4gyHZmQ/profile-displayphoto-shrink_800_800/0/1610258279544?e=1704931200&v=beta&t=D__XrquHSZ5zEra3zJAPv5xxQouxf_yD15ujTvSAX8M',
#  'background_cover_image_url': None,
#  'first_name': 'Prayag',
#  'last_name': 'Sheth',
#  'full_name': 'Prayag Sheth',
#  'follower_count': 306,
#  'occupation': 'Undergraduate Student at ICT - Marwadi University',
#  'headline': 'Student at Marwadi University',
#  'summary': None,
#  'country': 'IN',
#  'country_full_name': 'India',
#  'city': 'Rajkot',
#  'state': 'Gujarat',
#  'experiences': [{'starts_at': {'day': 1, 'month': 6, 'year': 2021},
#    'ends_at': None,
#    'company': 'ICT - Marwadi University',
#    'company_linkedin_profile_url': 'https://www.linkedin.com/company/ict-marwadi-university/',
#    'title': 'Undergraduate Student',
#    'description': None,
#    'location': 'Rajkot, Gujarat, India',
#    'logo_url': 'https://media.licdn.com/dms/image/C560BAQH5v5AZ9ueuiA/company-logo_400_400/0/1590732223118?e=1707350400&v=beta&t=TuFmbwu0mmFM0e8NX-oA5BgNdRnU-a0cL197wIzMJsM'},
#   {'starts_at': {'day': 1, 'month': 10, 'year': 2018},
#    'ends_at': {'day': 30, 'month': 6, 'year': 2021},
#    'company': 'ICT - Marwadi University',
#    'company_linkedin_profile_url': 'https://www.linkedin.com/company/ict-marwadi-university/',
#    'title': 'Diploma Student',
#    'description': None,
#    'location': 'Rajkot, Gujarat, India',
#    'logo_url': 'https://media.licdn.com/dms/image/C560BAQH5v5AZ9ueuiA/company-logo_400_400/0/1590732223118?e=1707350400&v=beta&t=TuFmbwu0mmFM0e8NX-oA5BgNdRnU-a0cL197wIzMJsM'},
#   {'starts_at': {'day': 1, 'month': 7, 'year': 2023},
#    'ends_at': {'day': 30, 'month': 9, 'year': 2023},
#    'company': 'JAB Companies India',
#    'company_linkedin_profile_url': None,
#    'title': 'Software Developer Intern',
#    'description': '• Back-end development exposure using Java and Spring Boot.\n• Integrated front-end technologies (HTML, CSS) for user-friendly interfaces.\nContributed to database design and participated in code reviews.\n• Conducted testing in Postman and debugging to ensure code quality',
#    'location': 'Gandhinagar, Gujarat, India',
#    'logo_url': None},
#   {'starts_at': {'day': 1, 'month': 5, 'year': 2022},
#    'ends_at': {'day': 31, 'month': 7, 'year': 2022},
#    'company': 'DataFirm Tech',
#    'company_linkedin_profile_url': 'https://www.linkedin.com/company/datafirm-tech1808/',
#    'title': 'Machine Learning Intern',
#    'description': 'Worked with various algorithms such as RNN, LSTM, CNN for stock market price prediction',
#    'location': 'Ahmedabad, Gujarat, India',
#    'logo_url': 'https://media.licdn.com/dms/image/C4D0BAQHfO_L_cX6XCg/company-logo_400_400/0/1677078831617?e=1707350400&v=beta&t=deZdwmWP_7YsxKJz-vHDgb9BZ7MvMh7ipFuzzHFBxa8'}],
#  'education': [{'starts_at': {'day': 1, 'month': 1, 'year': 2021},
#    'ends_at': {'day': 31, 'month': 1, 'year': 2024},
#    'field_of_study': 'Information and comunicationTechnology',
#    'degree_name': "Bachelor's degree",
#    'school': 'Marwadi University',
#    'school_linkedin_profile_url': None,
#    'description': None,
#    'logo_url': 'https://media.licdn.com/dms/image/D4D0BAQFYsn2oalYGjQ/company-logo_400_400/0/1661430244631/marwadiuniversity_logo?e=1707350400&v=beta&t=U-rqDr2jQMf_BAgQ3ASiDISNTChj2wKkf0mN7OuctJo',
#    'grade': None,
#    'activities_and_societies': None},
#   {'starts_at': {'day': 1, 'month': 1, 'year': 2018},
#    'ends_at': {'day': 31, 'month': 1, 'year': 2021},
#    'field_of_study': 'Information and Communication Technology',
#    'degree_name': 'Diploma of Education',
#    'school': 'Marwadi University',
#    'school_linkedin_profile_url': None,
#    'description': None,
#    'logo_url': 'https://media.licdn.com/dms/image/D4D0BAQFYsn2oalYGjQ/company-logo_400_400/0/1661430244631/marwadiuniversity_logo?e=1707350400&v=beta&t=U-rqDr2jQMf_BAgQ3ASiDISNTChj2wKkf0mN7OuctJo',
#    'grade': None,
#    'activities_and_societies': None}],
#  'languages': [],
#  'accomplishment_organisations': [],
#  'accomplishment_publications': [],
#  'accomplishment_honors_awards': [],
#  'accomplishment_patents': [],
#  'accomplishment_courses': [],
#  'accomplishment_projects': [],
#  'accomplishment_test_scores': [],
#  'volunteer_work': [],
#  'certifications': [],
#  'connections': None,
#  'people_also_viewed': [{'link': 'https://www.linkedin.com/in/meet-savaliya-88585b1b6',
#    'name': 'Meet Savaliya',
#    'summary': 'Student at ICT - Marwadi University',
#    'location': None},
#   {'link': 'https://www.linkedin.com/in/harsh-jolapara-a63b99205',
#    'name': 'Harsh Jolapara',
#    'summary': 'B.TECH IN INFORMATION COMMUNICATION TECHNOLOGY',
#    'location': None},
#   {'link': 'https://www.linkedin.com/in/jigar-pandya-b451251b6',
#    'name': 'Jigar Pandya',
#    'summary': 'Assistant Professor at Marwadi University',
#    'location': None},
#   {'link': 'https://www.linkedin.com/in/vasu-savjani-b67b2719a',
#    'name': 'Vasu Savjani',
#    'summary': 'Student at Marwadi University',
#    'location': None},
#   {'link': 'https://www.linkedin.com/in/keyur-asodariya-4950bb1b6',
#    'name': 'Keyur Asodariya',
#    'summary': 'Software Engineer at 63 Moons Technologies Limited',
#    'location': None},
#   {'link': 'https://www.linkedin.com/in/ravi-kumar-a540ab222',
#    'name': 'RAVI KUMAR',
#    'summary': 'Student | Information technology',
#    'location': None},
#   {'link': 'https://www.linkedin.com/in/tapan-khokhariya-52b294205',
#    'name': 'TAPAN KHOKHARIYA',
#    'summary': 'Bachelor of Technology - BTech at Marwadi University',
#    'location': None},
#   {'link': 'https://www.linkedin.com/in/dhanrajsinh-parmar-658160176',
#    'name': 'Dhanrajsinh Parmar',
#    'summary': 'Student at Marwadi University Currently pursuing B.Tech',
#    'location': None},
#   {'link': 'https://www.linkedin.com/in/naresh-jadeja-08150218',
#    'name': 'Naresh Jadeja',
#    'summary': 'Registrar at Marwadi University',
#    'location': None},
#   {'link': 'https://www.linkedin.com/in/upadhyay-rajan-a35962215',
#    'name': 'Upadhyay Rajan',
#    'summary': 'Software Developer',
#    'location': None}],
#  'recommendations': [],
#  'activities': [],
#  'similarly_named_profiles': [],
#  'articles': [],
#  'groups': [],
#  'skills': ['Python (Programming Language)',
#   'Machine Learning Algorithms',
#   'Spring Boot',
#   'MySQL',
#   'JavaScript',
#   'Java',
#   'SQL',
#   'English',
#   'Information Technology',
#   'Microsoft PowerPoint',
#   'HTML',
#   'PHP'],
#  'inferred_salary': None,
#  'gender': None,
#  'birth_date': None,
#  'industry': None,
#  'extra': None,
#  'interests': [],
#  'personal_emails': [],
#  'personal_numbers': []}
#   return response
# -----------------------------------------------------------

  headers = {'Authorization': 'Bearer ' + api_key}

  if link != '':
    response = requests.get(api_endpoint,
                            params={'url': link,'skills': 'include'},
                            headers=headers)
    return response.json()
  else:
    return {'error': 'please provide valid link'}
